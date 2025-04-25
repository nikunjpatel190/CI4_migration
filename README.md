# CI4_migration


## 🛠 Features & Best Practices

### ✅ Use of CI4 Query Builder
I use CodeIgniter 4’s built-in `Model::insert()` method for inserting data. This avoids custom SQL queries, resulting in cleaner, more maintainable code and enhanced security via framework-level abstraction.

---

### ✅ Input Validation using CI4’s Validation Service
All input fields are validated using CodeIgniter 4’s robust validation service. I've defined strict, meaningful validation rules beyond just `required`, which improves both data integrity and security. Clear error messages help users easily correct input issues.

---

### ✅ CSRF Protection
CodeIgniter 4 provides CSRF protection by default. In this project, I use the **cookie-based CSRF token** method, securing form submissions against forgery attacks effectively.

---

### ✅ Basic Error Handling & User Feedback
Critical sections such as database operations are enclosed within `try-catch` blocks to gracefully handle unexpected errors. This ensures users receive helpful feedback without exposing any sensitive system information.

---

### ✅ Security Best Practices
- Strict input validation rules prevent malicious or malformed data.
- Input is sanitized using `FILTER_SANITIZE_STRING` for an added layer of protection against common vulnerabilities like SQL injection.
- By leveraging the Model’s native methods (e.g., `insert()`), I avoid the risks of raw SQL queries, promoting a more secure and stable application.

---

## 📂 Modified or Created Files

### `.env`
- For storing the database credentials.

---

### `app/Database/Migrations/2025-04-25-092057_CreateEventsTable.php`
- For creating the table schema.

---

### `app/Config/Routes.php`
- For defining the routes.

---

### `app/Controllers/EventController.php`
- Manages the validation and data gathering logic.

---

### `app/Models/EventModel.php`
- Handles the database interactions for the events.

---

### `app/Config/Filters.php`
- Configures CSRF protection.

---

### `app/Views/event/list.php`
- Displays the list of events.

---

### `app/Views/event/form.php`
- Displays the event creation form.



