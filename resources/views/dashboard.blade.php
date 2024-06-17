<x-app-layout>
    <x-slot name="header">
        <h2 class="font-weight-semibold text-xl text-dark">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4 px-4">
        <div class="container">

            <!-- Admin Section -->
            <div class="my-4">
                <div class="card shadow-sm">
                    <div class="card-body text-dark">
                        <h3 class="card-title text-2xl font-weight-bold mb-4">
                            <a href="#" class="text-dark text-decoration-none" onmouseover="this.style.color='#007BFF'" onmouseout="this.style.color='#000000'">Admin Section</a>
                        </h3>

                        <!-- Admin Panel -->
                        <div class="mb-4">
                            <h4 class="text-xl font-weight-bold mb-2">
                                <a href="#" class="text-dark text-decoration-none" onmouseover="this.style.color='#007BFF'" onmouseout="this.style.color='#000000'">Admin Panel</a>
                            </h4>
                            <p class="text-lg text-muted mb-2">
                                The admin panel serves as the primary interface for administrators to manage the application.
                                Admins can perform CRUD operations on items in the database.
                            </p>
                            <!-- Add more details about Admin Panel functionality here -->
                        </div>

                        <!-- User Management -->
                        <div class="mb-4">
                            <h4 class="text-xl font-weight-bold mb-2">
                                <a href="#" class="text-dark text-decoration-none" onmouseover="this.style.color='#007BFF'" onmouseout="this.style.color='#000000'">User Management</a>
                            </h4>
                            <p class="text-lg text-muted mb-2">
                                Admins have the ability to add, view, edit, and delete users.
                                They can set roles and permissions for each user.
                            </p>
                            <!-- Add more details about User Management functionality here -->
                        </div>

                        <!-- Content Management -->
                        <div class="mb-4">
                            <h4 class="text-xl font-weight-bold mb-2">
                                <a href="#" class="text-dark text-decoration-none" onmouseover="this.style.color='#007BFF'" onmouseout="this.style.color='#000000'">Content Management</a>
                            </h4>
                            <p class="text-lg text-muted mb-2">
                                Allows admins to manage content such as articles, products, or any other entities relevant to the application.
                            </p>
                            <!-- Add more details about Content Management functionality here -->
                        </div>

                        <!-- System Configuration -->
                        <div class="mb-4">
                            <h4 class="text-xl font-weight-bold mb-2">
                                <a href="#" class="text-dark text-decoration-none" onmouseover="this.style.color='#007BFF'" onmouseout="this.style.color='#000000'">System Configuration</a>
                            </h4>
                            <p class="text-lg text-muted mb-2">
                                Provides tools for admins to configure application settings, manage email templates, set up SEO parameters, and integrate with third-party services.
                            </p>
                            <!-- Add more details about System Configuration functionality here -->
                        </div>

                        <!-- Security and Authentication -->
                        <div class="mb-4">
                            <h4 class="text-xl font-weight-bold mb-2">
                                <a href="#" class="text-dark text-decoration-none" onmouseover="this.style.color='#007BFF'" onmouseout="this.style.color='#000000'">Security and Authentication</a>
                            </h4>
                            <p class="text-lg text-muted mb-2">
                                Implements robust security measures to protect sensitive data and ensure secure access to the admin panel.
                            </p>
                            <!-- Add more details about Security and Authentication functionality here -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Section -->
            <div class="my-4">
                <div class="card shadow-sm">
                    <div class="card-body text-dark">
                        <h3 class="card-title text-2xl font-weight-bold mb-4">
                            <a href="#" class="text-dark text-decoration-none" onmouseover="this.style.color='#007BFF'" onmouseout="this.style.color='#000000'">Users Section</a>
                        </h3>

                        <!-- API Access -->
                        <div class="mb-4">
                            <h4 class="text-xl font-weight-bold mb-2">
                                <a href="#" class="text-dark text-decoration-none" onmouseover="this.style.color='#007BFF'" onmouseout="this.style.color='#000000'">API Access</a>
                            </h4>
                            <p class="text-lg text-muted mb-2">
                                Users can interact with the backend through a dedicated API, allowing them to log in, register, and access non-public routes.
                            </p>
                            <!-- Add more details about API Access functionality here -->
                        </div>

                        <!-- User Registration and Authentication -->
                        <div class="mb-4">
                            <h4 class="text-xl font-weight-bold mb-2">
                                <a href="#" class="text-dark text-decoration-none" onmouseover="this.style.color='#007BFF'" onmouseout="this.style.color='#000000'">User Registration and Authentication</a>
                            </h4>
                            <p class="text-lg text-muted mb-2">
                                Users can register and log in via the application's frontend or API.
                            </p>
                            <!-- Add more details about User Registration and Authentication functionality here -->
                        </div>

                        <!-- Content Interaction -->
                        <div class="mb-4">
                            <h4 class="text-xl font-weight-bold mb-2">
                                <a href="#" class="text-dark text-decoration-none" onmouseover="this.style.color='#007BFF'" onmouseout="this.style.color='#000000'">Content Interaction</a>
                            </h4>
                            <p class="text-lg text-muted mb-2">
                                Provides endpoints for users to manage their profiles, submit data, and interact with application features based on their roles and permissions.
                            </p>
                            <!-- Add more details about Content Interaction functionality here -->
                        </div>

                        <!-- Accessibility and Responsiveness -->
                        <div class="mb-4">
                            <h4 class="text-xl font-weight-bold mb-2">
                                <a href="#" class="text-dark text-decoration-none" onmouseover="this.style.color='#007BFF'" onmouseout="this.style.color='#000000'">Accessibility and Responsiveness</a>
                            </h4>
                            <p class="text-lg text-muted mb-2">
                                Ensures the API endpoints are well-documented and adhere to RESTful principles for ease of use and integration with frontend applications.
                            </p>
                            <!-- Add more details about Accessibility and Responsiveness functionality here -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
