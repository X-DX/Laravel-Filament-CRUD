### Laravel-Filament-CRUD
This project provides a comprehensive, step-by-step guide on how to build a complete Employee CRUD (Create, Read, Update, Delete) application with an admin panel using Filament 4 and Laravel 12. The instructor begins by setting up Laravel 12 and installing Filament 4, followed by creating and customizing an admin panel. The employee CRUD application covers essential features such as adding, viewing, editing, and deleting employees, including bulk delete functionality. The tutorial also dives deeply into implementing validations, pagination, search, and sorting features to enhance usability.

The video demonstrates practical usage of Laravel migrations to define database schema for the employee model, including fields like first name, last name, email, phone, position, and salary. It also shows how to create Filament resources, customize forms and tables, and how to leverage Filament’s form builder components to build intuitive UI elements. The project explains how to override default routing behavior for better UX, such as redirecting users to the employee list page instead of the edit page after creation or update.

Additionally, this project highlights how to implement modals for create, view, and edit operations, improving the user experience by avoiding page reloads. Here i tried to demonstrates how to customize the admin panel’s appearance by changing colors, sidebar behavior, logos, and layout, along with customizing navigation labels and page titles to make the application more personalized. 

### Highlights
🛠️ Step-by-step setup of Laravel 12 and Filament 4 for building an admin panel
👥 Complete employee CRUD functionality with bulk delete, search, sorting, and pagination
🔐 Implementation of form validations for fields like email uniqueness, phone number format, and salary limits
🎨 Customization of admin panel UI including sidebar collapsibility, color theme, and logo integration
🗂️ Efficient use of Laravel migrations and Filament resources to manage database and UI components
💡 Use of modals for create, view, and edit actions to enhance user experience without page reloads
🚀 Redirect customization after create and update actions to improve navigation flow

### Key Insights
⚙️ Laravel 12 and Filament 4 Integration: It showcases how Laravel 12’s modern backend capabilities paired with Filament 4’s powerful admin panel builder can rapidly accelerate the development of CRUD applications. Filament provides a standardized way to define forms, tables, and resources, reducing boilerplate and enhancing developer productivity.

🧩 Database Schema Design with Migrations: Defining the employee schema using migrations ensures a consistent and version-controlled database structure. Including unique constraints on email and phone fields enforces data integrity at the database level, which is critical for real-world applications managing sensitive employee data.

📝 Form Validation Best Practices: The detailed validation rules implemented—such as minimum and maximum lengths, uniqueness checks with current record exclusion, numeric constraints, and user-friendly helper texts—demonstrate best practices in form validation. These validations prevent invalid data entry and improve user feedback, reducing errors and support overhead.

🔍 Search and Sorting Enhance Usability: Adding searchable and sortable methods to all relevant columns empowers users to quickly locate employees based on any attribute. This significantly improves the admin panel’s usability, especially as data volume grows, and shows how Filament makes it straightforward to implement these features with minimal coding.

🔄 Modal-based CRUD Interfaces: Transitioning from full-page CRUD operations to modal dialogs for create, view, and edit actions reduces page reloads and streamlines the user experience. This design pattern is important for modern web applications seeking seamless and responsive interfaces. The tutorial highlights how to configure Filament to use modals effectively.

🎨 UI Customization and Branding: The ability to customize the sidebar width, color themes, brand logos, and navigation labels showcases Filament’s flexibility for branding and UX tailoring. This is crucial for developers building admin panels that align with organizational branding and usability guidelines.

🔗 Redirect Logic for Better Workflow: Overriding default redirect URLs after create and update operations prevents users from unintentionally landing on less useful pages (like the edit form) and instead guides them to relevant pages (like the employee list). This subtle UX improvement reflects attention to real-world user workflows in admin applications.

🗃️ Bulk Actions for Efficient Data Management: Implementing multi-delete functionality via checkboxes and bulk action buttons enables efficient management of multiple employee records simultaneously. This feature is vital for admins handling large datasets and demonstrates practical use of Filament’s bulk action API.

📊 Pagination Controls for Data Handling: The tutorial explains how to implement pagination with customizable per-page options, allowing users to control data volume per view. This is essential to maintain performance and usability when dealing with extensive employee lists.

🔧 Extensibility of Filament Resources: The modular structure of Filament resources—splitting functionality into pages, schemas, and tables—allows developers to maintain a clean codebase and easily extend or modify functionality. The video illustrates this organization clearly by editing form and table components in resource directories.

### Guide
## 1. setup
- install php, composer, laravel installer
- create DB and run migration
- install fialment4 i.e "composer require filament/filament:"^4.0""  
- install fialment panels i.e "php artisan filament:install --panels" 
/*** 
    - This command installs the Filament Admin Panel package into your Laravel project.
    - Filament is a modern admin panel framework for Laravel (similar to Nova or Backpack), used to quickly build dashboards, CRUDs, and forms.
    When you run above command, it does the following things automatically:
        - Publishes configuration files: Creates a config/filament.php or config/filament/{panel}.php file. This file stores settings like your admin path, colors, authentication guard, etc.
        - Creates a default “Panel”: In Filament v3, everything (Admin panel, Customer panel, etc.) is defined as a Panel.It generates a panel under app/Providers/Filament/AdminPanelProvider.php.
        - Sets up Filament routes: Adds routes for your panel in routes/filament.php (or automatically through the service provider.
        - Installs assets: Sets up TailwindCSS, Alpine.js, and other Filament UI dependencies. Makes sure your vite.config.js and resources/css/app.css are configured properly.
***/

- php artisan make:filament-user
/***
    - This command creates a new user account for logging into your Filament Admin Panel.
    - Then it saves the new user in your users table (the one used by your Filament panel guard).
    - After creating a Filament user, you can log into your admin panel.
***/

- In App/Filament/AdminPanelProvider you can change: colour, sidebar tollgle, logo, etc
- create employee model and do migrate i.e "php artisan make:model Employee -m" and add new table names and run migrate.
- add fillable array in employee model
- Add Filament Resource: in our case: php artisan make:filament-resource Employee
/***
    - In FilamentPHP (v4) — a Resource is a central concept used to manage your Eloquent models (your database entities) through an admin panel interface. It automatically generates CRUD (Create, Read, Update, Delete) interfaces for a model — meaning you can view, create, edit, and delete records — with minimal code.
    - Filament automatically gives you: eg: You create a PostResource.
    - A list page (table view of posts), A create page (form to add new posts), An edit page (form to modify posts), A view page (to display post details, optional)
***/

### Employee Filament Resource
- In schemas: EmployeeForm.php : text input component (After the you enter the data and submit the form)
- In Tables: EmployeesTable.php : we have define the text component to display the data
- Custom redirect page:
    - By default, after saving the form, the user will be redirected to the Edit page of the resource, or the View page if it is present.
    - You may set up a custom redirect when the form is saved by overriding the getRedirectUrl() method on the Create page class.
- In Tables: EmployeesTable.php : add Delete Icon 
- Creates a new “View Record” page under your Resource. "php artisan make:filament-page ViewEmployee --resource=EmployeeResource --type=ViewRecord" and remember we have to register this in "Employee Resource file"
- Do form validation rules in Schemas: EmployeeForm.php 
- Search, sorting and pagination 
- multi delete functionality
- customize nevigation label, title and heading