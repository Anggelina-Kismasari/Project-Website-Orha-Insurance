<!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->


	<!--Regular Datatables CSS-->
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--Responsive Extension Datatables CSS-->
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

	<style>
		/*Overrides for Tailwind CSS */

		/*Form fields*/
		.dataTables_wrapper select,
		.dataTables_wrapper .dataTables_filter input {
			color: #4a5568;
			/*text-gray-700*/
			padding-left: 1rem;
			/*pl-4*/
			padding-right: 1rem;
			/*pl-4*/
			padding-top: .5rem;
			/*pl-2*/
			padding-bottom: .5rem;
			/*pl-2*/
			line-height: 1.25;
			/*leading-tight*/
			border-width: 2px;
			/*border-2*/
			border-radius: .25rem;
			border-color: #edf2f7;
			/*border-gray-200*/
			background-color: #edf2f7;
			/*bg-gray-200*/
		}

		/*Row Hover*/
		table.dataTable.hover tbody tr:hover,
		table.dataTable.display tbody tr:hover {
			background-color: #ebf4ff;
			/*bg-indigo-100*/
		}

		/*Pagination Buttons*/
		.dataTables_wrapper .dataTables_paginate .paginate_button {
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Current selected */
		.dataTables_wrapper .dataTables_paginate .paginate_button.current {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #667eea !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Pagination Buttons - Hover */
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
			color: #fff !important;
			/*text-white*/
			box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
			/*shadow*/
			font-weight: 700;
			/*font-bold*/
			border-radius: .25rem;
			/*rounded*/
			background: #667eea !important;
			/*bg-indigo-500*/
			border: 1px solid transparent;
			/*border border-transparent*/
		}

		/*Add padding to bottom border */
		table.dataTable.no-footer {
			border-bottom: 1px solid #e2e8f0;
			/*border-b-1 border-gray-300*/
			margin-top: 0.75em;
			margin-bottom: 0.75em;
		}

		/*Change colour of responsive icon*/
		table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
		table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
			background-color: #667eea !important;
			/*bg-indigo-500*/
		}
	</style>
</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">


	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

		<!--Title-->
		<h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl" style="text-align:center;">Fasilitas Kesehatan Ketersediaan Kamar Untuk BPJS Kesehatan Di Rumah Sakit Kota Surabaya</h1>


		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">Nama</th>
						<th data-priority="2">VVIP</th>
						<th data-priority="3">VIP</th>
						<th data-priority="5">I</th>
						<th data-priority="6">II</th>
						<th data-priority="7">III</th>
						<th data-priority="10">UGD</th>
						<th data-priority="11">ISOLASI</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>RSIA BANTUAN 05.08.05 SURABAYA</td>
						<td>2</td>
						<td>2</td>
						<td>1</td>
						<td>3</td>
						<td>8</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>Rumkitalmar Ewa Pangalila</td>
						<td>1</td>
						<td>0</td>
						<td>1</td>
						<td>23</td>
						<td>17</td>
						<td>0</td>
						<td>11</td>
					</tr>
					<tr>
						<td>Rumkit Soemitro Lanud Mulyono</td>
						<td>0</td>
						<td>2</td>
						<td>8</td>
						<td>18</td>
						<td>23</td>
						<td>0</td>
						<td>2</td>
					</tr>
					<tr>
						<td>RSUD Bhakti Dharma Husada</td>
						<td>0</td>
						<td>0</td>
						<td>20</td>
						<td>18</td>
						<td>10</td>
						<td>0</td>
						<td>42</td>
					</tr>
					<tr>
						<td>Rumkital Dr. Oepomo	</td>
						<td>0</td>
						<td>0</td>
						<td>5</td>
						<td>14</td>
						<td>22</td>
						<td>0</td>
						<td>13</td>
					</tr>
					<tr>
						<td>RS BUNDA SURABAYA</td>
						<td>1</td>
						<td>0</td>
						<td>0</td>
						<td>1</td>
						<td>6</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RUMAH SAKIT MATA UNDAAN</td>
						<td>1</td>
						<td>1</td>
						<td>2</td>
						<td>6</td>
						<td>15</td>
						<td>0</td>
						<td>4</td>
					</tr>
					<tr>
						<td>RS Universitas Airlangga</td>
						<td>0</td>
						<td>2</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>79</td>
					</tr>
					<tr>
						<td>RS Wijaya</td>
						<td>1</td>
						<td>3</td>
						<td>5</td>
						<td>2</td>
						<td>12</td>
						<td>0</td>
						<td>2</td>
					</tr>
					<tr>
						<td>RS Royal Surabaya</td>
						<td>5</td>
						<td>0</td>
						<td>52</td>
						<td>34</td>
						<td>23</td>
						<td>0</td>
						<td>8</td>
					</tr>
					<tr>
						<td>RS BHAKTI RAHAYU</td>
						<td>0</td>
						<td>3</td>
						<td>8</td>
						<td>29</td>
						<td>11</td>
						<td>0</td>
						<td>12</td>
					</tr>
					<tr>
						<td>RSI DARUS SYIFA</td>
						<td>0</td>
						<td>12</td>
						<td>35</td>
						<td>26</td>
						<td>83</td>
						<td>0</td>
						<td>33</td>
					</tr>
					<tr>
						<td>RS WIYUNG SEJAHTERA</td>
						<td>0</td>
						<td>0</td>
						<td>3</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>4</td>
					</tr>
					<tr>
						<td>RS WILLIAM BOOTH SURABAYA</td>
						<td>1</td>
						<td>12</td>
						<td>26</td>
						<td>34</td>
						<td>24</td>
						<td>0</td>
						<td>3</td>
					</tr>
					<tr>
						<td>RS MANYAR MEDICAL CENTRE</td>
						<td>1</td>
						<td>3</td>
						<td>3</td>
						<td>5</td>
						<td>8</td>
						<td>0</td>
						<td>27</td>
					</tr>
					<tr>
						<td>SILOAM HOSPITALS SURABAYA</td>
						<td>7</td>
						<td>2</td>
						<td>8</td>
						<td>5</td>
						<td>4</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RSIA PERDANA MEDICA</td>
						<td>2</td>
						<td>2</td>
						<td>5</td>
						<td>2</td>
						<td>8</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RS HUSADA UTAMA</td>
						<td>4</td>
						<td>13</td>
						<td>19</td>
						<td>19</td>
						<td>26</td>
						<td>0</td>
						<td>12</td>
					</tr>
					<tr>
						<td>RSIA PUTRI SURABAYA	</td>
						<td>1</td>
						<td>4</td>
						<td>8</td>
						<td>6</td>
						<td>9</td>
						<td>0</td>
						<td>1</td>
					</tr>
					<tr>
						<td>RS ADI HUSADA KAPASARI</td>
						<td>1</td>
						<td>4</td>
						<td>4</td>
						<td>6</td>
						<td>5</td>
						<td>0</td>
						<td>53</td>
					</tr>
					<tr>
						<td>RSIA Nur Ummi Numbi</td>
						<td>0</td>
						<td>2</td>
						<td>2</td>
						<td>3</td>
						<td>16</td>
						<td>0</td>
						<td>1</td>
					</tr>
					<tr>
						<td>RS Surabaya Medical Service</td>
						<td>0</td>
						<td>0</td>
						<td>5</td>
						<td>5</td>
						<td>22</td>
						<td>0</td>
						<td>1</td>
					</tr>
					<tr>
						<td>RSIA GRAHA MEDIKA</td>
						<td>0</td>
						<td>1</td>
						<td>5</td>
						<td>12</td>
						<td>5</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RS GOTONG ROYONG</td>
						<td>1</td>
						<td>7</td>
						<td>13</td>
						<td>13</td>
						<td>5</td>
						<td>0</td>
						<td>31</td>
					</tr>
					<tr>
						<td>RS PKU MUHAMMADIYAH SURABAYA</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>3</td>
						<td>5</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RS MITRA KELUARGA KENJERAN</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
						<td>1</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>KLINIK UTAMA RI USADA BUANA</td>
						<td>1</td>
						<td>1</td>
						<td>0</td>
						<td>0</td>
						<td>4</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RSUD DR SOETOMO SURABAYA</td>
						<td>32</td>
						<td>56</td>
						<td>83</td>
						<td>156</td>
						<td>189</td>
						<td>0</td>
						<td>354</td>
					</tr>
					<tr>
						<td>RSUD HAJI PROVINSI JAWA TIMUR</td>
						<td>6</td>
						<td>5</td>
						<td>22</td>
						<td>53</td>
						<td>19</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RSJ DAERAH MENUR SURABAYA</td>
						<td>0</td>
						<td>15</td>
						<td>2</td>
						<td>15</td>
						<td>43</td>
						<td>0</td>
						<td>2</td>
					</tr>
					<tr>
						<td>RS ISLAM JEMURSARI SURABAYA</td>
						<td>1</td>
						<td>2</td>
						<td>0</td>
						<td>8</td>
						<td>1</td>
						<td>0</td>
						<td>5</td>
					</tr>
					<tr>
						<td>RS PHC</td>
						<td>42</td>
						<td>11</td>
						<td>6</td>
						<td>10</td>
						<td>11</td>
						<td>0</td>
						<td>9</td>
					</tr>
					<tr>
						<td>RSAL DR.RAMELAN SURABAYA</td>
						<td>17</td>
						<td>24</td>
						<td>90</td>
						<td>66</td>
						<td>74</td>
						<td>0</td>
						<td>430</td>
					</tr>
					<tr>
						<td>RSUD DR M SOEWANDHIE</td>
						<td>0</td>
						<td>0</td>
						<td>16</td>
						<td>13</td>
						<td>8</td>
						<td>0</td>
						<td>10</td>
					</tr>
					<tr>
						<td>RSAD BRAWIJAYA SURABAYA</td>
						<td>2</td>
						<td>6</td>
						<td>4</td>
						<td>19</td>
						<td>4</td>
						<td>0</td>
						<td>4</td>
					</tr>
					<tr>
						<td>RS BHAYANGKARA SURABAYA</td>
						<td>8</td>
						<td>12</td>
						<td>69</td>
						<td>29</td>
						<td>21</td>
						<td>0</td>
						<td>58</td>
					</tr>
					<tr>
						<td>RSUD Husada Prima</td>
						<td>0</td>
						<td>0</td>
						<td>8</td>
						<td>12</td>
						<td>25</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RS MATA MASYARAKAT SURABAYA</td>
						<td>0</td>
						<td>2</td>
						<td>2</td>
						<td>27</td>
						<td>19</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RS AL IRSYAD</td>
						<td>19</td>
						<td>18</td>
						<td>18</td>
						<td>28</td>
						<td>23</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RUMAH SAKIT MUJI RAHAYU</td>
						<td>0</td>
						<td>1</td>
						<td>2</td>
						<td>1</td>
						<td>14</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RS ISLAM A YANI</td>
						<td>0</td>
						<td>22</td>
						<td>14</td>
						<td>16</td>
						<td>28</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>RSIA PURA RAHARJA</td>
						<td>0</td>
						<td>2</td>
						<td>8</td>
						<td>22</td>
						<td>15</td>
						<td>5</td>
						<td>2</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!--/Card-->
	</div>

	<!--/container-->
	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\OrhaInsurance\resources\views/user/faskes.blade.php ENDPATH**/ ?>