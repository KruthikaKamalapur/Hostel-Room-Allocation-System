<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About NIT AP College</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2e9de; 
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        header {
            background-color: #5c4326; 
            color: #f2e9de; 
            padding: 20px;
            text-align: center;
            border-bottom: 4px solid #463317; 
            border-radius: 0 0 10px 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative; /* Added for positioning */
        }

        .nav-link {
            color: #f2e9de;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            background-color: #7a5a33;
            transition: background-color 0.3s ease;
        }

        .nav-link:hover {
            background-color: #5c4326;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff; 
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            animation: slideIn 0.5s ease;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        h1{
            color: #fff;
        }
        h2, h3 {
            color: #5c4326; 
            text-align: center;
        }

        p {
            line-height: 1.6;
        }

        ul {
            padding-left: 20px;
        }

        .accordion {
            background-color: #f2e9de; 
            color: #5c4326; 
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            transition: 0.4s;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .accordion.active, .accordion:hover {
            background-color: #e1d8c8;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: #f2e9de; 
            overflow: hidden;
            border-radius: 5px;
            animation: fadeInPanel 0.5s ease;
        }

        @keyframes fadeInPanel {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .panel ul {
            list-style-type: none;
            padding: 0;
        }

        .panel li {
            padding: 10px 0;
            border-bottom: 1px solid #c3b6a5;
            animation: slideInPanel 0.5s ease;
        }

        @keyframes slideInPanel {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .panel li:last-child {
            border-bottom: none;
        }

        footer {
        background-color: #5c4326; 
        color: #f2e9de; 
        padding: 20px 0;
        border-radius: 0 0 10px 10px;
        margin-top: 20px;
        text-align: center;
        }
        .footerh2{
            color:white;
        }
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
        }

        .footer-section {
            flex: 1;
            margin: 0 20px;
        }

        .footer-section h3 {
            margin-bottom: 10px;
        }

        .footer-section p {
            margin-bottom: 5px;
        }

        .center-header {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>
<body>

<header>
    <a class="nav-link" aria-current="page" href="index.php">Home</a>
    <h1 class="center-header">NIT Andhra Pradesh</h1>
</header>

<div class="container">
    <h2>Overview</h2>
    <p>NIT AP College, located in Tadepalligudem, is one of the premier engineering institutions in India. It was established with the aim of providing high-quality technical education and fostering innovation and research.</p>

    <h2>Facilities</h2>
    <button class="accordion">Accommodation</button>
    <div class="panel">
        <ul>
            <li><strong>Krishnaveni Block:</strong> 20 rooms (I year)</li>
            <li><strong>Bhima Block:</strong> 25 rooms (II year)</li>
            <li><strong>Tungabhadra Block:</strong> 30 rooms (III year)</li>
            <li><strong>Munneru Block:</strong> 35 rooms (VI year)</li>
        </ul>
    </div>

    <button class="accordion">Mess Facilities</button>
    <div class="panel">
        <ul>
            <li><strong>Breakfast:</strong> 7:00 AM - 9:00 AM</li>
            <li><strong>Lunch:</strong> 12:30 PM - 2:00 PM</li>
            <li><strong>Dinner:</strong> 7:30 PM - 9:00 PM</li>
        </ul>
    </div>

    <button class="accordion">Room Allocation</button>
    <div class="panel">
        <ul>
            <li><strong>Single Occupancy:</strong> 4th year students</li>
            <li><strong>Double Occupancy:</strong> 2nd and 3rd year students</li>
            <li><strong>Triple Occupancy:</strong> 1st year students</li>
        </ul>
    </div>
</div>


<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

</body>
<footer>
    <div class="footer-content">
        <div class="footer-section facilities">
        <h2 class="footerh2">Facilities</h2>
            <p>central Library</p>
            <p>Hostels</p>
            <p>Health Care</p>
            <p>WNT</p>
            <p>Sports</p>
            <p>Guest House</p>
        </div>
        <div class="footer-section hostel-info">
            <h2 class="footerh2">College Hostel</h2>
            <p>Total Hostels: 4</p>
            <p>Capacity Krishnaveni: 50 rooms</p>
            <p>Capacity Bhima: 100 rooms</p>
            <p>Capacity Munneru: 100 rooms</p>
            <p>Capacity Tungabhadra: 100 rooms</p>
        </div>
        <div class="footer-section festivals">
            <h2 class="footerh2">Festivals</h2>
            <p>Techkriya</p>
            <p>Vulcanzy</p>
            <p>Annual Cultural Fest</p>
            <p>Technical fests</p>
        </div>
    </div>
    <p>THIS WEBSITE BELONGS TO NATIONAL INSTITUTE OF TECHNOLOGY, ANDHRA PRADESH</p>
</footer>

</html>