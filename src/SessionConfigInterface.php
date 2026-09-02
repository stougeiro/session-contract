<?php declare(strict_types=1);

    namespace STDW\Contract\Session;


    interface SessionConfigInterface
    {
        /** @return string
         */
        public function name(): string;

        /** @return array<string, mixed>
         */
        public function cookie(): array;

        /** @return array<string, mixed>
         */
        public function gc(): array;

        /** @return array<string, mixed>
         */
        public function extra(): array;

        /** @return string
         */
        public function storage(): string;
    }
