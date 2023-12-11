<?php
session_start();

class Flash {
    public static function set($key, $message, $type = 'success') {
        $_SESSION['flash_messages'][$key] = [
            'message' => $message,
            'type' => $type
        ];
    }

    public static function display($key) {
        if (isset($_SESSION['flash_messages'][$key])) {
            $flash = $_SESSION['flash_messages'][$key];
            echo '<div class="alert alert-' . htmlspecialchars($flash['type']) . '">' . htmlspecialchars($flash['message']) . '</div>';
            unset($_SESSION['flash_messages'][$key]);
        }
    }

    public static function has($key) {
        return isset($_SESSION['flash_messages'][$key]);
    }

    public static function all() {
        if (isset($_SESSION['flash_messages']) && count($_SESSION['flash_messages']) > 0) {
            foreach ($_SESSION['flash_messages'] as $key => $flash) {
                echo '<div class="alert alert-' . htmlspecialchars($flash['type']) . '">' . htmlspecialchars($flash['message']) . '</div>';
                unset($_SESSION['flash_messages'][$key]);
            }
        }
    }
}