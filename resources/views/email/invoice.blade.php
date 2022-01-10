<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>A simple, clean, and responsive HTML invoice template</title>

		<!-- Favicon -->
		<!-- <link rel="icon" href="./images/favicon.png" type="image/x-icon" /> -->

		<!-- Invoice styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

            .text-light {
                color: #808080;
            }

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
                                    <!-- <h5>Leluhur Bali</h5> -->
                                    <strong>Leluhur Bali</strong> 
									<!-- <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fcommons.wikimedia.org%2Fwiki%2FFile%3ARPC-JP_Logo.png&psig=AOvVaw0I-bOuQlnWTgooI1_NgIF7&ust=1641531496059000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNjFy7-rnPUCFQAAAAAdAAAAABAO" alt="Company logo" style="width: 100%; max-width: 300px" /> -->
								</td>

								<td>
									Invoice #: 
                                    @if(isset($admin))
                                        <a href="{{url('/admin/ongoing/'.$booking_id)}}"> {{$booking_number}}</a><br />
                                    @else
                                        {{$booking_number}} <br>
                                    @endif
                                    
									Created: {{$created_at}}<br />
									<!-- Due: February 1, 2015 -->
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
                                Jl. Intan Permai, Gg. Berlian 1C, <br>
                                Kerobokan Kelod, Kuta - Bali<br>
                                P. +62 81 834 9919<br>
                                M. +62 82 247 030 147

								</td>

								<td>
									<!-- Acme Corp.<br /> -->
                                    <!-- <h5>Invoice To:</h5> -->
                                    <strong>Invoice To: </strong> <br>
									{{$customer_name}}<br />
									{{$customer_email}} <br>
                                    M. {{$customer_mobile}}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Payment Method</td>

					<td></td>
				</tr>

				<tr class="details">
					<td>Cash</td>

					<td></td>
				</tr>

				<tr class="heading">
					<td>Item</td>

					<td>Price</td>
				</tr>

				<tr class="item">
					<td>
                        {{$villa_name}} <br>
                        <span class="text-light"><i>Location: {{$villa_location}}</i></span> <br>
                        <span class="text-light"><i>Qty/Number of nights: {{$num_nights}}</i></span> <br>
                        <span class="text-light"><i>From {{$start_date}} to {{$end_date}}</i></span>
                    </td>

					<td>Rp{{$villa_price}} / nights</td>
				</tr>

				<tr class="total">
					<td></td>

					<td>Total: Rp{{$villa_grand_total}}</td>
				</tr>
			</table>
            <div>
                <p><strong>Notes for Customer</strong></p>
                <p><i>nanti diisi cara bayar dll</i></p>
            </div>

		</div>
	</body>
</html>

<script>

</script>