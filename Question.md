### 🧠 Laravel + Filament CRUD Project – Interview Questions

### 🏗️ 1. Project Overview & Architecture
1. Can you briefly explain what your Laravel-Filament-CRUD project is and what technologies it uses?
2. Why did you choose Filament over other Laravel admin panel solutions like Nova, Voyager, or Backpack?
3. What’s the role of Filament Panels in your project, and how do they differ from Filament Resources?
4. How does Filament integrate with Laravel’s MVC architecture?
5. What are the key folders or files that Filament creates when you install it?

### 🧩 2. Laravel Setup & Migrations
6. Walk me through the process of setting up Laravel 12 for your project.
7. What command did you use to create your Employee model and migration, and what’s the purpose of each flag?
8. How did you design the Employee table schema using migrations?
9. What’s the importance of unique constraints on fields like email and phone in your migration?
10. How do you roll back and re-run migrations in Laravel, and why might you need to do so?

### 🗂️ 3. Filament Resource & CRUD Operations
11. What is a Filament Resource, and what does it automatically generate for you?
12. How do Filament resources relate to Laravel Eloquent models?
13. What are the schema files (like EmployeeForm.php) and table files (like EmployeesTable.php) used for in Filament?
14. How does Filament handle Create, Read, Update, and Delete operations internally?
15. How did you implement the ViewEmployee page in your resource, and how is it registered?

### 💾 4. Forms, Validation, and Data Integrity

16. What kind of validation rules did you implement in your Employee form?
17. How does Filament handle validation differently compared to standard Laravel form requests?
18. How did you ensure email uniqueness while allowing edits to existing records (i.e., excluding the current record from validation)?
19. Can you explain how you validated numeric constraints such as salary limits or phone number formats?
20. What are helper texts in Filament forms, and how do they improve the user experience?

### 🔍 5. Search, Sorting, and Pagination

21. How did you implement search functionality in your Employee table?
22. What columns did you make sortable, and how is sorting configured in Filament?
23. How does Filament handle pagination?
24. How can you customize the number of results per page?
25. Why is pagination important for performance in CRUD applications?

### 🗑️ 6. Bulk Actions & Modals

26. How did you implement bulk delete functionality in Filament?
27. What are bulk actions, and how do they differ from normal actions?
28. How did you configure Filament to use modals for create, edit, and view actions instead of page reloads?
29. What are the benefits of using modal-based CRUD operations?
30. How can you customize modal titles and button texts in Filament?

### 🎨 7. UI Customization & Branding

How did you change the color theme, sidebar behavior, and logo in the admin panel?
Where did you configure these UI changes (which file)?
What steps did you take to make your admin panel more user-friendly or visually aligned with a brand?
How can you customize navigation labels, titles, and headings for better UX?
What’s the significance of overriding the getRedirectUrl() method, and where did you use it?

### ⚙️ 8. Redirects & Workflow Enhancements

By default, where does Filament redirect after creating or updating a record?
How did you override this behavior, and why?
Why do you think redirecting to the list view after creation is better for usability?
How can you customize redirect logic conditionally (e.g., based on user role or action)?

### 🧱 9. Advanced Filament Concepts

What’s the difference between pages, resources, and widgets in Filament?
How does Filament handle authorization and policies for different resources?
Can Filament work with soft deletes, and how would you enable that for employees?
What is the Filament Shield package, and when would you use it?
How can you extend Filament to include custom dashboards or analytics widgets?

### 🚀 10. Performance & Extensibility

What strategies did you use to ensure good performance with large datasets?
How would you handle server-side filtering if the data grows large?
How does Filament use lazy loading for relationships in tables?
What’s the benefit of organizing Filament components into pages, schemas, and tables?
How can this modularity help with future scalability and maintenance?

### 💬 11. Conceptual & Practical Questions

Suppose you want to restrict some users from accessing the EmployeeResource — how would you implement that?
How would you handle role-based access control (RBAC) in Filament?
How would you add an export-to-CSV feature for the Employee list?
How can you add custom filters (e.g., “Show employees with salary > 50,000”)?
How can you integrate notifications after creating or deleting a record?

### 🧩 12. Deployment & Maintenance

What’s the best way to deploy a Laravel + Filament project to production?
How do you handle .env configuration for production environments?
How would you back up and restore your employee database safely?
What’s your strategy for migrating schema changes without data loss?
How would you set up error logging and monitoring for the admin panel?

### ⭐ 13. Behavioral / Reflection Questions

What challenges did you face while building this Filament CRUD project?
What did you learn about Laravel and Filament integration through this project?
If you were to improve this project further, what would you add next (e.g., roles, charts, dashboards)?
How does this project demonstrate your understanding of full-stack web development?
How does Filament 4 differ from earlier versions like Filament 2 or 3?