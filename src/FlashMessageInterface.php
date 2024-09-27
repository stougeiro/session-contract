<?php declare(strict_types=1);

    namespace STDW\Session\Contract;


    interface FlashMessageInterface
    {
        public function get(string $key): mixed;

        public function set(string $key, mixed $message, int $age = 1): void;

        public function exists(string $_key): bool;

        public function clear(): void;
    }