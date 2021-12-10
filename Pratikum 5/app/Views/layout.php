<!-- Layout berikut mengikuti benuk layout dari halaman welcome page yang disediakan oleh CodeIgniter -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <title>
		<?= $title; ?>
	</title>

    <style {csp-style-nonce}>
		html {
            background-image: url("/images/iot-white.jpg");
			height: 100%;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
        } html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		} header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		} .menu {
			padding: .4rem 2rem;
		} header ul {
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		} header li {
			display: inline-block;
		} header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		} header li.menu-item a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		} header li.menu-item a:hover, header li.menu-item a:focus {
			background-color: rgba(221, 72, 20, .2);
			color: rgba(221, 72, 20, 1);
		} header .logo {
			float: left;
			height: 44px;
			padding: .4rem .5rem;
		} header .menu-toggle {
			display: none;
			float: right;
			font-size: 2rem;
			font-weight: bold;
		} @media (max-width: 629px) {
			header .menu-item {
				background-color: rgba(244, 245, 246, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			} header .hidden {
				display: none;
			}
		} .d-flex {
            display: flex;
        } .btn {
            padding: 16px 36px;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            color: #ffffff;
        } .color {
            background-color: #5454D4;
        } section {
            padding: 5px 10%;
        } .table-class {
			border: 1px solid black;
			margin-left: auto;
			margin-right: auto;
			margin-top: 5%;
			margin-bottom: 5%;
			width: 80%;
			border-collapse: collapse;
		} td {
			text-align: center;
		} th {
			color: white;
			background: black;
		} th, td {
			border: 1px solid black;
			padding: 8px;
		} tr:nth-child(even) {
			background: white;
		} tr:nth-child(odd) {
			background: #bdabab;
		} .device {
			background: white;
			line-height: 100%;
			display: grid;
			margin-top: 25px;
			margin-bottom: 25px;
			margin-left: auto;
			margin-right: auto;
			text-align: left;
			font-size: 20px;
			border: 2px solid;
			border-radius: 20px;
			grid-template-columns: 0.5fr 0.5fr;
			grid-template-rows: 0.1fr 0.9fr;
			width: 75%;
			height: 95vh;
			gap: 20px 20px;
			grid-template-areas: 
			"name name"
			"image detail";
		} .name {
			text-align: center;
			display: inline;
			font-size: 70px;
			grid-area: name;
		} .image {
			grid-area: image;
		} .detail {
			grid-area: detail;
			line-height: 26pt;
			text-align: left;
			font-size: 20px;
		} footer {
			background-color: #30e3e0;
			text-align: center;
		} footer .environment {
			color: #181a19;
			padding: 2rem 1.75rem;
		} footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}
	</style>
</head>
<body>
    <header>
        <div class="menu">
            <ul>
                <li class="logo">
                    <img 
                        height="44" title="Web Monitoring Logo" alt="Web Monitoring Logo!"
                        src="https://spanning.com/wp-content/uploads/2020/03/dark-web-monitoring-icon-large.png"
                    /></a>
                </li>
                <li class="menu-toggle">
                    <button onclick="toggleMenu();">&#9776;</button>
                </li>
                <li class="menu-item hidden">
                    <a href="<?= base_url('/'); ?>">Home</a>
                </li>
                <li class="menu-item hidden">
                    <a href="<?= base_url('/DeviceController/Index');  ?>">Devices</a>
                </li>
            </ul>
        </div>
    </header>

    <?= $this->renderSection('content'); ?>

	<footer>
		<div class="environment">
			<p>Page rendered in {elapsed_time} seconds</p>
			<p>Environment: <?= ENVIRONMENT ?></p>
		</div>

		<div class="copyrights">
			<p>&copy; <?= date('Y') ?> Timothy Christyan _ 105219045 _ CS-2019; Assignment 5 for pratical training web programming.</p>
		</div>
	</footer>
</body>
</html>