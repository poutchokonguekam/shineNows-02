<?php
declare(strict_types=1);

session_start();

const BASE_URL = 'https://example.com';
const DEFAULT_LANG = 'fr_FR';
const SUPPORTED_LANGS = ['fr_FR', 'en_US', 'de_DE'];
const LOCALE_PATH = __DIR__ . '/locales';

require_once __DIR__ . '/includes/db_connect.php';
