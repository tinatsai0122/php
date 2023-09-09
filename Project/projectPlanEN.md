# 1. Project Document

## 1.1. Project Overview

### Project Title

EU Study Trips Web Application Development

### Project Description:

The EU Study Trips web application is envisioned as a comprehensive online platform dedicated to enriching educational and cultural experiences in Europe, specifically designed to cater to Chinese-speaking students. This multifaceted platform aims to serve as a centralized hub, providing an array of services and resources tailored to the unique needs and preferences of our target audience, which includes students, parents, educators, and tour organizers.

The initial phase of this project will be dedicated to the development of the MVP, focusing on core features and functionalities essential for a fully functional and user-friendly platform. Subsequent phases will involve iterative enhancements, additions, and refinements to expand the platform's capabilities and user base.

The MVP development will prioritize key components such as booking study tours, accessing language programs, participating in cultural immersion activities, and more. These fundamental elements will lay the foundation for future developments and ensure a seamless and engaging user experience.

## Project Objectives and Goals

**Objective 1:** Develop a robust Minimum Viable Product (MVP) of the EU Study Trips web application, with a focus on core functionalities essential for a comprehensive educational and cultural experience platform.

**Objective 2:** Implement a secure and efficient booking system for study tours, language programs, cultural immersion activities, and related services, promoting accessibility and convenience.

**Objective 3:** Integrate reliable and relevant APIs to enhance the platform's offerings, including class registration, country-specific touristic information, weather updates, and other useful data.

## 1.2. Project MVP Scope

### **1. User Registration and Profiles**

- **Functionalities:**
  - **User Registration & Login**: Implement seamless user sign-up and login processes.
  - **User Profiles**: Allow users to create, edit, and manage their profiles, accessing personal information and booking history.
- **Tools:**
  - [FOSUserBundle](https://symfony.com/doc/current/bundles/FOSUserBundle/index.html): Leverage for efficient user management.
  - [Symfony Security Bundle](https://symfony.com/doc/current/security.html): Ensure robust security.

### **2. Tour and Activity Listings**

- **Functionalities:**
  - **Listing Page**: Develop a user-friendly page to showcase a wide array of available tours and activities, offering essential details like names, descriptions, and pricing.
  - **Detail Page**: Create individualized pages for each tour and activity, presenting comprehensive information to potential customers.
- **Tools:**
  - [Doctrine ORM](https://www.doctrine-project.org/projects/orm.html): Utilize for efficient database interactions and managing entity relationships within your listings.
  - [VichUploaderBundle](https://github.com/dustin10/VichUploaderBundle): Implement to facilitate hassle-free file uploads, crucial for showcasing captivating images of the tours and activities.

### **3. Booking System**

- **Functionalities:**
  - **Booking Mechanism**: Develop a straightforward booking system allowing users to reserve spots for tours and activities without online payment integration for simplicity.
  - **Booking Confirmations**: Automatically send booking confirmations via email for user convenience.
- **Tools:**
  - [Doctrine ORM](https://www.doctrine-project.org/projects/orm.html): Harness the power of for managing booking data and interactions with the database.
  - [SwiftMailerBundle (or Symfony Mailer)](https://symfony.com/doc/current/email.html): Utilize either to ensure seamless email confirmations are sent following bookings.

### **4. Admin Panel**

- **Functionalities:**
  - **Admin Dashboard**: Construct a user-friendly admin panel for simplified management of listings and efficient viewing of bookings.
- **Tools:**
  - [EasyAdminBundle](https://github.com/EasyCorp/EasyAdminBundle): Build the admin panel effortlessly using to facilitate smooth management tasks.

### **5. API Integration: Adameus API**

- **Functionalities:**
  - **Flight Offering Integration**: Enrich the tour offerings with real-time flight information, enabling users to plan their trips more conveniently.
- **Tools:**
  - [Adameus Self-ServiceAPI](https://developers.amadeus.com/self-service)

# \_Please note that this MVP scope is part of a multi-phase project, and additional functionalities and integrations will be considered in subsequent phases to enhance the platform's capabilities.

8. **Integration of APIs:**
   - Integration with external APIs for services like
     - flight booking, accommodation booking : Amadeus API
     - weather information
     - language translation: Google Translate or OpenAI

## Symfony Bundles & Components

- **Symfony Security Bundle:** Utilize the Symfony Security Bundle to manage authentication and authorization. You can set up different roles and access controls for the admin, service provider, and user.
- **EasyAdminBundle:** It’s a bundle that can help you create admin panels quickly and is compatible with Symfony.
- **FOSUserBundle:** Leverage the FOSUserBundle to handle user management functionalities. It comes with features such as user registration, password resetting, and profile management, which would be beneficial for managing your service providers and users.
- **Workflow Component:** Symfony’s Workflow component can be used to handle the workflows in your system, such as the approval process for the service provider profile.
- **Sulu CMS:**

## Roles

- **Administrator:**
- **Service Provider:**
- **User:**

## Project Planning
