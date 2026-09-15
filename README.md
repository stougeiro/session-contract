![PHP](https://img.shields.io/badge/PHP-%20^8.2-777BB4)
![PHPStan-Level](https://img.shields.io/badge/PHPStan-Level%209-224488)
![License](https://img.shields.io/badge/License-MIT-777)

# Session Contract

Minimal, framework‑agnostic interfaces for handling session data and flash messages in PHP. Designed to work seamlessly in both traditional PHP‑FPM environments and persistent servers like Swoole, enabling pluggable, storage‑independent session handling with zero friction.

## ✨ Features

- **Essential interfaces**  
  Defines only the core contracts for session and flash message handling.

- **Framework‑agnostic**  
  Can be used with any PHP application, regardless of framework or architecture.

- **Storage‑agnostic**  
  Works with any backend: files, databases, Redis, Swoole\Table, or custom drivers.

- **Runtime‑agnostic**  
  Compatible with PHP‑FPM, Swoole, RoadRunner, CLI applications, and other runtimes.

- **Predictable behavior**  
  Clear, minimal interfaces that avoid hidden side effects.

- **Easy integration**  
  Simple to implement and plug into existing containers, routers, or middleware pipelines.

---

## 📦 Installation

Install via Composer:

```bash
composer require stougeiro/session-contract
```

## 🔧 Implementations

Below is a list of known implementations maintained by the community.

- `stougeiro/router`  
  Repository: https://github.com/stougeiro/session

---

## 🧠 Why?

This package provides minimal, framework‑agnostic contracts for session and flash message handling in PHP. It exists to give developers full freedom to implement session logic according to the needs of their application — whether using PHP‑FPM, Swoole, RoadRunner, or any other runtime.

By defining only the essential interfaces, this package allows:
- complete decoupling between application code and session storage
- custom session lifecycles
- pluggable backends (files, SQLite, Redis, Swoole\Table, databases, etc.)
- integration with any container or router
- predictable flash message behavior
- clean architecture without framework lock‑in

In short:  
- You choose how sessions work.
- This package only defines the contract.

---

## 🤝 Contributions

Contributions are welcome.
Feel free to open issues or submit pull requests.

<br>

[<img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" width="170"/>](https://www.buymeacoffee.com/stougeiro)