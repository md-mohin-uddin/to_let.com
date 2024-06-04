# ToLet.com - Online House Rental System

## User Section

### House Owners:

- **Registration:** Users must register to access ToLet.com services.
- **Property Listing:** Owners can easily list their properties following specific terms and conditions.
- **Payment:** Owners are required to pay a fee to list their properties on ToLet.com.

### Tenants:

- **Registration:** Users must register to access ToLet.com services.
- **Property Viewing:** Tenants can view available properties and their details on the platform.
- **Contacting ToLet.com:** Interested tenants can contact the administrator for further inquiries.
- **User Feedback:** Clients can share their feedback to help other users make informed decisions.

## Admin Section

### Super Admin:

- **Property Management:** Super admins can manage property listings, including adding, updating, viewing, and deleting properties.
- **User Role Creation:** Super admins can create sub-admin roles such as Call Center and Agent.
- **Property Approval:** Super admins have authority to approve pending property listings.
- **User Communication:** Super admins can respond to user queries through various channels.

### Call Center/Admin:

- **Property Management:** Admins can manage property listings and approve pending ads requests.
- **Rent Request Assignment:** Admins can assign rent requests to agents.
- **User Communication:** Admins can respond to user queries through various channels.

### Agent:

- **Rent Request Management:** Agents are responsible for managing rent requests and updating property statuses.



## Installation Instructions

1. Clone the repository with the following command:
`git clone https://github.com/md-mohin-uddin/to_let.com
`

2. Navigate to the project directory:
`cd tolet
`

3. Copy the `.env.example` file to `.env` and edit the Database credentials there.

4. Install PHP dependencies using Composer:
`composer install`

5. Generate an application key:
`php artisan key`


6. Run the database migrations:
`php artisan migrate`


7. Install JavaScript dependencies using npm:
`npm install`


8. Start the Laravel development server:
`php artisan serve`


## Database
![TOLET_DB](https://github.com/md-mohin-uddin/to_let.com/assets/71177978/06eeb609-69c7-4d25-ba1d-c1d21f49c703)



