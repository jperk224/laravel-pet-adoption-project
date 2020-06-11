# Laravel Pet Adoption Site Project

## Unit 5 Project

### Pet Adoption Site

* Leverages the Laravel Framework and MVC design pattern
* Views built across varying blade templates that extend a base layout and render based on route chosen
* Bootstrap grid system renders responsive design for good UX across varying viewports
* Data migrations were used to set up tables and seed the database
* The Pet Model class is leveraged to pull specific result sets from the DB based on the route chosen

### CSS and jQuery Edits

* CSS opcaity changes and transition modifications are triggered by scroll events to fade pets cards into view

#### _Summarize the project and what problem it was solving_
This project served as an intro into Laravel and the MVC design pattern.  I was tasked with developing a pet adoption website using Laravel to convert supplied static HTML and CSS into blade templates to render dynamic views based on varying web routes.

This site can be enhanced in the future by adding pagination and search functionality.  

#### _What did you do particularly well?_
I broke the varying views into different blade templates that extend a base layout and render differing body content based on the web route chosen.  I seeded the database relatively quickly with a simple loop that could easily be extended to add more records by simply increasing the number of loop iterations.  

#### _Where could you enhance your code? How would these improvements make your code more efficient, secure, and so on?_
The jQuery fade in of the pet cards seems incomplete.  Research and continued troubleshooting have not yet yielded a complete solution.  This would need to be addressed prior to any production launch.  I also convert many of the ORM objects into arrays prior to their use in the blade template.  Better education around ORM will likely yield an ability to leverage the full ORM framework without needing to convert the object to an array.

#### _Did you find writing any piece of this code challenging, and how did you overcome this?_
Working within the Laravel framework was challenging and there is much more to learn that should come with experience and building more sites.  I read a lot of documentation and sample code to better understand the framework and acheive the project goals.

#### _What skills from this project will be particularly transferable to other projects and/or course work?_
Further refining MVC principles and solidifying my Laravel knowledge should transfer well to future development projects.
