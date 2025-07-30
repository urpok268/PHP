# 📅 PHP Interactive Calendar & Event Planner

[![PHP Version](https://img.shields.io/badge/php-%3E%3D7.4-blue.svg)](https://www.php.net/)  
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)

---

## 📖 Описание

**PHP Interactive Calendar** — это современное веб‑приложение-календарь с чистым и понятным интерфейсом, реализованное на PHP, JavaScript и CSS (Flexbox & Grid). Позволяет удобно просматривать месяцы, выбирать даты и назначать/просматривать события.

<p align="center">
  <img src="https://github.com/urpok268/PHP/blob/main/calendar/screen.png" alt="Календарь – демонстрация" width="700"/>
</p>

---

## 📌 Основные возможности

- 🔄 **Навигация по месяцам**  
  Легко переключайтесь на предыдущие и следующие месяцы кнопками «\<» и «\>».

- 📆 **Выбор и подсветка даты**  
  Текущая и выбранные даты визуально выделены цветом.

- 📝 **Управление событиями**  
  Назначайте, редактируйте и удаляйте события для любой выбранной даты.

- 📱 **Адаптивный дизайн**  
  Гибкая верстка на Bootstrap Grid, Flexbox и чистом CSS подстраивается под все экраны.

- ⚙️ **PHP + MySQL**  
  Надежный бэкенд на PHP с хранением событий в базе данных.

---

## 📦 Структура проекта

```
/calendar
├── css/
│   ├── bootstrap-grid.min.css
│   └── style.css
├── js/
│   ├── bootstrap.bundle.min.js
│   └── script.js
├── connect.php       # настройка соединения с БД
├── index.php         # основная логика календаря
├── index.html        # статический шаблон (при необходимости)
├── phpinfo.php       # для проверки настроек PHP
└── screen.png        # скриншот интерфейса
```

---

## 🚀 Установка и запуск

1. **Клонировать репозиторий**  
   ```bash
   git clone https://github.com/urpok268/PHP.git
   cd PHP/calendar
   ```
2. **Настроить базу данных**  
   - Создайте новую базу MySQL (например, `calendar_db`).
   - Выполните SQL‑скрипт для создания таблицы `events`:
     ```sql
     CREATE TABLE `events` (
       `id` INT AUTO_INCREMENT PRIMARY KEY,
       `event_date` DATE NOT NULL,
       `title` VARCHAR(255) NOT NULL,
       `description` TEXT,
       `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```
3. **Настроить подключение**  
   Отредактируйте файл `connect.php`, указав параметры вашего сервера, пользователя и пароля:
   ```php
   <?php
   $host     = 'localhost';
   $dbname   = 'calendar_db';
   $username = 'db_user';
   $password = 'db_pass';

   try {
     $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
     exit('Database error: ' . $e->getMessage());
   }
   ```
4. **Запустить локальный сервер**  
   ```bash
   php -S localhost:8000
   ```
5. **Открыть в браузере**  
   Перейдите по адресу:  
   ```
   http://localhost:8000/index.php
   ```

---

## 🛠️ Технологии

- **PHP 7.4+** – серверная логика, CRUD для событий  
- **MySQL** – хранение данных событий  
- **JavaScript (Vanilla)** – динамика UI и AJAX-запросы  
- **Bootstrap Grid** – адаптивная сетка  
- **CSS Grid & Flexbox** – современная верстка  
- **HTML5** – семантический разметка

---

## 🤝 Содействие

1. Форкните репозиторий  
2. Создайте ветку фичи:  
   ```bash
   git checkout -b feature/awesome-feature
   ```
3. Внесите свои изменения и закоммитьте:  
   ```bash
   git commit -m "Add awesome feature"
   ```
4. Запушьте в свою ветку и откройте Pull Request.  
5. ⭐ Не забудьте поставить звезду, если проект вам полезен!

---

## 📄 Лицензия

Этот проект распространяется под **MIT License**.  
См. файл [LICENSE](LICENSE) для подробностей.

---
*Happy coding!* 🚀
