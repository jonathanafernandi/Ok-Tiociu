# Ok! Tiociu

**Ok! Tiociu** is a Laravel-based web application for learning basic Teochew language, developed as a medium for Chinese-Indonesian cultural preservation. It was built as a bachelor's thesis project at Bina Nusantara University, addressing the endangerment of the Teochew language among younger generations of the Chinese-Indonesian community.

## Table of Contents

- [Background](#background)
- [Live Demo](#live-demo)
- [Tech Stack](#tech-stack)
- [Development Methodology](#development-methodology)
- [Database Structure](#database-structure)
- [Getting Started](#getting-started)
- [Features](#features)
- [Usage Guide](#usage-guide)
- [Evaluation Results](#evaluation-results)
- [Author](#author)
- [License](#license)

## Background

Teochew is one of five major Chinese-Indonesian sub-ethnic languages (alongside Hakka, Hokkien, Cantonese, and Hainanese), with roots tracing back to the Chaozhou, Jieyang, and Shantou regions of Guangdong, China. Due to historical suppression during Indonesia's New Order era and limited intergenerational transmission, the Teochew language faces a real risk of decline among younger Chinese-Indonesians.

**Ok! Tiociu** was developed to make basic Teochew vocabulary and phrases accessible to anyone interested in learning, particularly younger generations seeking to reconnect with their ancestral language, while also providing a community space for discussion and knowledge-sharing about Teochew language and culture.

## Live Demo

Check out the live site: [https://www.oktiociu.com](https://www.oktiociu.com)

## Tech Stack

| Layer | Technology |
|---|---|
| Backend Framework | Laravel (PHP) |
| Frontend | HTML, CSS, JavaScript, Bootstrap |
| Database | MySQL |
| Design Tool | Figma (UI design) |
| Architecture Pattern | Model-View-Controller (MVC) |

## Development Methodology

This project was developed using the **Waterfall model**, structured into five phases:

1. **Communication**: Requirements gathering through literature review, analysis of similar applications (e.g., Basa Sunda e-learning, Sumba language learning app, Duolingo), and user needs questionnaires.
2. **Planning**: Determining technology stack and development scheduling.
3. **Modeling**: System design using Object-Oriented Analysis and Design (OOAD) with UML diagrams (use case, activity, class, and sequence diagrams), database design using Entity-Relationship Diagrams (ERD), and UI design in Figma.
4. **Construction**: Coding the application according to the finalized design.
5. **Deployment**: Black-box testing, UI evaluation (Eight Golden Rules of Interface Design), UX evaluation (Five Measurable Human Factors and System Usability Scale), and learning effectiveness evaluation.

## Database Structure

The application's MySQL database consists of 12 interrelated tables, including:

| Table | Purpose |
|---|---|
| `users` | Stores registered user account data |
| `password_reset_tokens` | Stores password reset tokens sent via email |
| `topics` | Stores available Teochew learning topics |
| `vocabularies` | Stores Teochew vocabulary/phrases, Indonesian translations, audio paths, and image paths per topic |
| *(additional tables)* | Support quiz questions, forum posts, comments, and likes |

## Getting Started

### Prerequisites

- PHP 8.1+
- Composer
- MySQL

### Installation

```bash
git clone https://github.com/jonathanafernandi/Ok-Tiociu.git
cd Ok-Tiociu
composer install
cp .env.example .env
php artisan key:generate
```

Configure your database credentials in `.env`, then run:

```bash
php artisan migrate --seed
php artisan serve
```

Visit `http://localhost:8000` to access the application.

## Features

### Learning Materials
- Browse a list of learning topics (e.g., Pronouns, Greetings, Numbers, Family, Food, Colors, Animals, and more).
- View vocabulary and phrases for each topic, complete with Indonesian translations, pronunciation audio, and illustrative images.

### Practice Exercises (Quiz)
- Take topic-based quizzes to reinforce vocabulary retention.
- Receive immediate feedback on whether an answer is correct or incorrect, including the correct answer when needed.
- Quiz questions may include pronunciation audio playback.

### Discussion Forum
- Browse forum posts related to Teochew and Chinese-Indonesian language and culture.
- Filter posts by tag and switch between tabs.
- Create new posts with a title, description, and tags.
- Comment on posts and view post details.
- Like or unlike posts and comments.
- Delete your own posts and comments (with confirmation dialogs).

### Account Management
- Register a new account and log in with email and password.
- Reset a forgotten password via an emailed reset link.
- View and edit profile information (name).
- Change account password.
- Log out securely.

## Usage Guide

1. **Register/Login**: New users register with full name, email, password, and address. Existing users log in with email and password.
2. **Browse Topics**: View the list of available Teochew learning topics on the learning page.
3. **Study Vocabulary**: Open a topic to view vocabulary and phrases with translations, audio pronunciation, and images.
4. **Practice**: Start a quiz for the selected topic, answer questions, and receive immediate feedback.
5. **Discuss**: Visit the forum to read, create, comment on, and like posts related to Teochew language and culture.
6. **Manage Profile**: Update your name, change your password, or log out from the profile page.

## Evaluation Results

The application was evaluated through multiple methods as part of the thesis research:

- **Black-box testing** confirmed that all features function as intended.
- **UI evaluation** was conducted using the Eight Golden Rules of Interface Design.
- **UX evaluation** using the Five Measurable Human Factors and the System Usability Scale (SUS) yielded an average SUS score of **86.6**, indicating excellent usability.
- **Learning effectiveness evaluation** (via pretest/posttest) showed measurable improvement in users' understanding of basic Teochew vocabulary after using the application.

## Author

**Jonathan Alvindo Fernandi**  
Bachelor of Computing in Computer Science, School of Computer Science, Bina Nusantara University

## License

This project was developed for academic purposes as part of a bachelor's thesis. Please contact the author before reusing this codebase for purposes beyond personal reference or academic review.
