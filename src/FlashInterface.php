<?php declare(strict_types=1);

    namespace STDW\Contract\Session;


    interface FlashInterface
    {
        /**
         * @param string $key 
         * @param mixed $value 
         * @return void 
         */
        public function set(string $key, mixed $value): void;

        /**
         * @param string $key 
         * @param mixed $default 
         * @return mixed 
         */
        public function get(string $key, mixed $default = null): mixed;

        /**
         * @param string $key 
         * @return bool 
         */
        public function has(string $key): bool;

        /** @return void 
         */
        public function clear(): void;
    }
