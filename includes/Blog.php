<?php
class Blog {
    private $posts_dir;
    private $per_page = 10;

    public function __construct() {
        $this->posts_dir = dirname(__DIR__) . '/pages/blog-posts/';
        
        // Create the blog-posts directory if it doesn't exist
        if (!is_dir($this->posts_dir)) {
            mkdir($this->posts_dir, 0755, true);
        }
    }

    /**
     * Get all blog posts
     * 
     * @param int $limit Number of posts to return
     * @param int $offset Offset for pagination
     * @return array Array of posts
     */
    public function getPosts($limit = null, $offset = 0) {
        $posts = [];
        
        // Default to all posts if no limit is set
        $limit = $limit ?? PHP_INT_MAX;
        
        // Get all PHP files in the posts directory
        $files = glob($this->posts_dir . '*.php');
        
        // Sort files by modification time (newest first)
        usort($files, function($a, $b) {
            return filemtime($b) - filemtime($a);
        });
        
        // Process each file
        $count = 0;
        foreach ($files as $file) {
            if ($count >= $limit) break;
            
            $post = $this->getPostMeta($file);
            if ($post) {
                $posts[] = $post;
                $count++;
            }
        }
        
        return $posts;
    }
    
    /**
     * Get a single post by its slug
     * 
     * @param string $slug The post slug
     * @return array|null Post data or null if not found
     */
    public function getPostBySlug($slug) {
        $file = $this->posts_dir . $slug . '.php';
        
        if (file_exists($file)) {
            $post = $this->getPostMeta($file);
            if ($post) {
                // Get the full content
                ob_start();
                include $file;
                $content = ob_get_clean();
                
                // Extract content between <!-- content --> tags if they exist
                if (preg_match('/<!--\s*content\s*-->([\s\S]*)<\/div>/', $content, $matches)) {
                    $post['content'] = trim($matches[1]);
                } else {
                    $post['content'] = $content;
                }
                
                return $post;
            }
        }
        
        return null;
    }
    
    /**
     * Extract post metadata from a file
     * 
     * @param string $file Path to the post file
     * @return array|null Post metadata or null if invalid
     */
    private function getPostMeta($file) {
        $content = file_get_contents($file);
        
        // Extract the PHP block
        if (preg_match('/<\?php\s*\/\*\*\s*([\s\S]*?)\*\/\s*\$post_meta\s*=\s*\[([\s\S]*?)\]\s*;\s*\?>/', $content, $matches)) {
            $meta_doc = $matches[1];
            $meta_array = $matches[2];
            
            // Parse the array into key-value pairs
            $post_meta = [];
            $pairs = array_map('trim', explode("\n", $meta_array));
            
            foreach ($pairs as $pair) {
                if (preg_match('/\'([^\']+)\'(?:\s*=>\s*|:)\s*([^,]+),?/', $pair, $m)) {
                    $key = $m[1];
                    $value = trim($m[2], "' \t\n\r\0\x0B");
                    $post_meta[$key] = $value;
                }
            }
            
            // Add slug from filename if not set
            if (!isset($post_meta['slug'])) {
                $post_meta['slug'] = basename($file, '.php');
            }
            
            // Add modification date if date not set
            if (!isset($post_meta['date'])) {
                $post_meta['date'] = date('Y-m-d H:i:s', filemtime($file));
            }
            
            return $post_meta;
        }
        
        return null;
    }
    
    /**
     * Get the total number of posts
     * 
     * @return int Number of posts
     */
    public function getTotalPosts() {
        $files = glob($this->posts_dir . '*.php');
        return count($files);
    }
}
