<?php declare(strict_types=1);

    namespace STDW\Contract\Session;


    interface SessionConfigInterface
    {
        /** @return string
         */
        public function handler(): string;

        /** @return string
         */
        public function name(): string;

        /** @return string
         */
        public function storage(): string;

        /** @return int
         */
        public function cookieLifetime(): int;

        /** @return string
         */
        public function cookieSameSite(): string;

        /** @return int
         */
        public function gcMaxLifetime(): int;

        /** @return int
         */
        public function gcProbability(): int;

        /** @return int
         */
        public function gcDivisor(): int;

        /** @return bool
         */
        public function regeneration(): bool;

        /** @return int
         */
        public function regenerationTime(): int;

        /** @return array<string, mixed>
         */
        public function extra(): array;
    }
