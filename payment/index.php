<?php

$txnid = "Txn" . rand(10000, 99999999);
// if (strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0) {
// 	//Request hash
// 	$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
// 	if (strcasecmp($contentType, 'application/json') == 0) {
// 		$data = json_decode(file_get_contents('php://input'));
// 		$hash = hash('sha512', $data->key . '|' . $data->txnid . '|' . $data->amount . '|' . $data->pinfo . '|' . $data->fname . '|' . $data->email . '|||||' . $data->udf5 . '||||||' . $data->salt);
// 		$json = array();
// 		$json['success'] = $hash;
// 		echo json_encode($json);
// 	}
// 	exit(0);
// }

function getCallbackUrl()
{
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'payment/response.php';
}

function getAmount()
{
	$className = $_GET['class'];
	$amount = 0;
	if ($className == "I.Com." || $className == "I.A.") {
		$amount = 1;
	} else if ($className == "I.Sc.") {
		$amount = 2;
	}
	echo $amount;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PayUmoney BOLT PHP7 Kit</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<!-- this meta viewport is required for BOLT //-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- BOLT Sandbox/test //-->
	<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt- color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
	<!-- BOLT Production/Live //-->
	<!--// script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script //-->

</head>
<style type="text/css">
	.main {
		margin-left: 30px;
		font-family: Verdana, Geneva, sans-serif, serif;
	}

	.text {
		float: left;
		width: 180px;
	}

	.dv {
		margin-bottom: 5px;
	}
</style>

<body>
	<script type="text/javascript">
		var className =  <?php echo "'" . $_GET['class'] . "'"; ?>;
		var fullName = <?php echo "'" . $_GET['name'] . "'"; ?>;
		var mobileNumber = <?php echo "'" . $_GET['mobileNumber'] . "'"; ?>;
		var amount = <?php getAmount(); ?>;
		var key = 'tDPHMyRz';
		var salt = 'zrX5L88Yx1';
		var txnid = <?php echo "'" . $txnid . "'"; ?>;
		var productinfo = 'Payment for ' + className;
		var udf = 'BOLT_KIT_PHP7';
		var hash =  <?php echo hash('sha512', 'tDPHMyRz|' . $txnid . '|' + getAmount() . '|Payment for ' . $$_GET['class'] + '|' . $_GET['name'] . '|' . 'spy@mail.com' . '|||||' . 'BOLT_KIT_PHP7' . '||||||' . 'zrX5L88Yx1');  ?>;
		//sha512(key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5||||||salt) 
		debugger;
		
		//// 'ze1cJpcv5cY0z9rrnE5q7pqxCv9Cigxlf0EQZZsveE0=';
		var redirectUrl = <?php echo getCallbackUrl(); ?>
		var adharNumber = <?php echo $_GET['adharNumber']; ?>;

			function launchBOLT() {
				bolt.launch({
					key: key,
					txnid: txnid,
					hash: hash,
					amount: amount,
					firstname: fullName,
					email: 'spy@mail.com',
					phone: mobileNumber,
					productinfo: productinfo,
					udf5: udf,
					surl: redirectUrl,
					furl: redirectUrl,
					mode: 'dropout'
				}, {
					responseHandler: function(BOLT) {
						console.log(BOLT.response.txnStatus);
						if (BOLT.response.txnStatus != 'CANCEL') {
							//Salt is passd here for demo purpose only. For practical use keep salt at server side only.
							var fr = '<form action=\"' + $('#surl').val() + '\" method=\"post\">' +
								'<input type=\"hidden\" name=\"key\" value=\"' + BOLT.response.key + '\" />' +
								'<input type=\"hidden\" name=\"salt\" value=\"' + $('#salt').val() + '\" />' +
								'<input type=\"hidden\" name=\"txnid\" value=\"' + BOLT.response.txnid + '\" />' +
								'<input type=\"hidden\" name=\"amount\" value=\"' + BOLT.response.amount + '\" />' +
								'<input type=\"hidden\" name=\"productinfo\" value=\"' + BOLT.response.productinfo + '\" />' +
								'<input type=\"hidden\" name=\"firstname\" value=\"' + BOLT.response.firstname + '\" />' +
								'<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
								'<input type=\"hidden\" name=\"udf5\" value=\"' + BOLT.response.udf5 + '\" />' +
								'<input type=\"hidden\" name=\"mihpayid\" value=\"' + BOLT.response.mihpayid + '\" />' +
								'<input type=\"hidden\" name=\"status\" value=\"' + BOLT.response.status + '\" />' +
								'<input type=\"hidden\" name=\"hash\" value=\"' + BOLT.response.hash + '\" />' +
								'<input type=\"hidden\" name=\"class\" value=\"' + className + '\" />' +
								'<input type=\"hidden\" name=\"adharNumber\" value=\"' + adharNumber + '\" />' +
								'</form>';
							var form = jQuery(fr);
							jQuery('body').append(form);
							form.submit();
						}
					},
					catchException: function(BOLT) {
						alert(BOLT.message);
					}
				});
			}

		// $('#payment_form').bind('keyup blur', function() {
		// 	$.ajax({
		// 		url: 'index.php',
		// 		type: 'post',
		// 		data: JSON.stringify({
		// 			key: key,
		// 			salt: salt,
		// 			txnid: txnid,
		// 			amount: amount,
		// 			pinfo: pinfo,
		// 			fname: fullName,
		// 			//	email: $('#email').val(),
		// 			mobile: mobileNumber,
		// 			udf5: udf
		// 		}),
		// 		contentType: "application/json",
		// 		dataType: 'json',
		// 		success: function(json) {
		// 			if (json['error']) {
		// 				$('#alertinfo').html('<i class="fa fa-info-circle"></i>' + json['error']);
		// 			} else if (json['success']) {
		// 				$('#hash').val(json['success']);
		// 			}
		// 		}
		// 	});
		// });

		//--
	</script>

</body>

</html>