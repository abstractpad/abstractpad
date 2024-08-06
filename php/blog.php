<!-----This is the home page----->

<?php

    // session_start();
    // require 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Veyda Arts n Designs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="blog.css">
    <script src="https://kit.fontawesome.com/90575e6a68.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <div class="maincontt3 blg">

        <div class="contner3 sbc blogcont"></div>
        <div class="contner3 t3hcont blogcont">
            <div class="bloghcont">
                <h3 class="text-align">Website Development Project Ideas</h3>
            </div>
            <div class="blogcnt">
            <div class="contner blogspace">
                <div class="incontner4">
                    <h2>E-Commerce Website</h2>
                    <div class="pcont">
                        <p>An e-commerce site comes with features such as:log in/sign in, product lists, order summary,
                            discount offers, profile section, cart items, creating payment gateway, search bar and
                            many others which is possible with features of React like React hooks for state driven conditions
                            without writing a class, props for passing the variables etc. Follow a compound-based structure.
                            The app should be dynamic, interactive, and accessible on multiple platforms.
                            For the back end, use the event-driven architecture of NodeJS and call-back function 
                            when an event is triggered such as an order is placed for an item. The data of the products,
                            ordered items and profile details should be stored in a structured way and must be encrypted.
                            Any updates to be made like adding a new feature must be done at the back end using NodeJS. You
                            can also use Express.js which is an open-source framework for NodeJS which implements web apps 
                            quicker and easier.
                        </p>
                    </div>
                </div>
                <div id="wp1" class="incontner4 imgconttt"></div>
            </div>
            <div class="contner blogspace">
                <div id="wp2" class="incontner4 imgconttt"></div>
                <div class="incontner4">
                    <h2>Social Media Website</h2>
                    <div class="pcont">
                        <p>Implementing this requires very well-connected ends for various reasons like security and 
                            management. The UI part consists of chat options, feeds, notifications, and a friends list.You can
                            also use windows.alert{} function to create a pop-up when a new update is seen or for various other
                            purposes. For developing a dynamic web app, Angular is the best choice. Angular works with TypeScript
                            which makes it much easier to implement. We implement its back end by setting up databases, servers, and APIs
                            and working out perfect storage solutions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="contner blogspace">
                <div class="incontner4">
                    <h2>Job Web Application</h2>
                    <div class="pcont">
                        <p>
                            An application that gives employment to individuals as per their qualifications. The app filters
                            the job as per the requirement and qualifications. Whie applyig for the jobs, all the details
                            of the company like role, salary, location, etc should be visible to the individual. Use of
                            Context APIs to share data without passing it through props manually, React Redux to store,
                            dispatch, and see the actions of the data.
                        </p>
                    </div>
                </div>
                <div id="wp3" class="incontner4 imgconttt"></div>
            </div>
            <div class="contner blogspace">
                <div id="wp4" class="incontner4 imgconttt"></div>
                <div class="incontner4">
                    <h2>Resume Builder Website</h2>
                    <div class="pcont">
                        <p>
                            Its features include personal details, educational background, skills achieved, projects undertaken
                            and many more. Each section has many sub-sections which could be implemented using components in React.
                            The back end will include everything related to the person's bio-data and keep it secure by limiting 
                            the settings for example restricting logins to certains users or IP addresses, using automated brute force
                            detection systems.
                        </p>
                    </div>
                </div>
            </div>

            <div class="contner blogspace">
                <div class="incontner4">
                    <h2>Healthcare Application Website</h2>
                    <div class="pcont">
                        <p>
                            Implementing something which determines your health status and warns you to take proper care.
                            A pop-up using windows.pop{} function when your sugar levels goes beyond a certai leve or something
                            unusual for physical health. The app diagnoses your physical condition as per your entries in terms
                            of health and advises you to follow some practices at no cost.
                            JSX enables the creation of a new UI feature that offers real-time results. Using event handlers,
                            several events can be created and decide what should happen next.In certain cases, it can also advise 
                            you to consult a doctor in your comfort place.
                        </p>
                    </div>
                </div>
                <div id="wp5" class="incontner4 imgconttt"></div>
            </div>
            <div class="contner blogspace">
                <div id="wp6" class="incontner4 imgconttt"></div>
                <div class="incontner4">
                    <h2>Course Provider Website</h2>
                    <div class="pcont">
                        <p>
                            A platform that provides tutorials in the form of videos or paragraphs to every
                            student same as Udemy and Coursera. React Router to navigate through pages, React Hooks to 
                            have simpler code and the use of props to pass the values in functional components. FUnctional 
                            components can be used where props can be used as an argument. In class components,
                            we extend components and have a render function. All the sections can be made using Navbar functionality.
                            All the students' details can be stored in a database at the backend. For DB management, use MongoDB
                            and you can use NodeJS to build servers.
                        </p>
                    </div>
                </div>
            </div>

            <div class="contner blogspace">
                <div class="incontner4">
                    <h2>Gaming Web Application</h2>
                    <div class="pcont">
                        <p>
                            This can be built using Vue.JS which provides higher customizability. It also has an overlap with 
                            Angular and React concerning their functionality like the use of components.
                            Import the router which could be used for navigating the pages like score pages, level page etc.
                            At the back end you can store the player's name, the scores they achieved, the level they passed and 
                            the highscore obtained. All the details of the game can be handled by the back end.
                        </p>
                    </div>
                </div>
                <div id="wp7" class="incontner4 imgconttt"></div>
            </div>
            <div class="contner blogspace">
                <div id="wp8" class="incontner4 imgconttt"></div>
                <div class="incontner4">
                    <h2>Freelancing Websites</h2>
                    <div class="pcont">
                        <p>
                            A platform where developers can easily find and connect with fellow developers, and work on projects 
                            together. This could level up one's skills. Using Redux, to update the state value to each input field,
                            we add an onChange event hanler. The homepage should list all the companies which hire freelancers for 
                            collaboration. The back end should work with server-side web apps and integration of the work done by 
                            front-end developers. They usually write web services and APIs which are used by front-end developers.
                        </p>
                    </div>
                </div>
            </div>

            <div class="contner blogspace">
                <div class="incontner4">
                    <h2>Online Code Editor Website</h2>
                    <div class="pcont">
                        <p>
                            These editors are accessible via web browsers and work on remote servers. The basic features include 
                            syntax highlighting, and error detection. Using JavaScript code snippets, you can implement these features.
                            The front-end can be handled by React or Angular. The back end can be handled using Java and DBMS. The 
                            authentication key can be generated using MongoDB Atlas and used in back end code snippet for the data 
                            fetching and updating process. The styling can be implemented and made attractive using CSS. You can 
                            also publish your project on Github for others' reference.
                        </p>
                    </div>
                </div>
                <div id="wp9" class="incontner4 imgconttt"></div>
            </div>
            <div class="contner blogspace">
                <div id="wp10" class="incontner4 imgconttt"></div>
                <div class="incontner4">
                    <h2>Trading Web Application</h2>
                    <div class="pcont">
                        <p>
                            The app features available market data, trading alerts and many more. Using React Native to implement 
                            this woud be the best choice. All the dependencies and dev-dependencies which library you need to 
                            use, get installed.
                        </p>
                    </div>
                </div>
            </div>
            </div>

        </div>
        
        <div class="contner3 sbc blogcont"><a class="logoutbtn" href="logout.php">Logout</a></div>

    </div>



    <?php
        include 'footer.php';
    ?>
</body>
</html>