<?php
$array = [];
foreach ($_POST as $key => $value)
{
	switch($key)
	{
		case 'header':
			$array['header'] =$value;
			break;
		case 'username':
			$array['username'] =$value;
			break;
		case 'password':
			$array['password'] =$value;
			break;
		case 'examName':
			$array['examName'] =$value;
			break;
		case 'functionName':
			$array['functionName'] =$value;
			break;
		case 'topic':
			$array['topic'] =$value;
			break;
		case 'difficulty':
			$array['difficulty'] =$value;
			break;
		case 'input':
			$array['input'] =$value;
			break;
		case 'output':
			$array['output'] =$value;
			break;
		case 'questionList':
			$array['questionList'] =$value;
			break;
		case 'question':
			$array['question'] =$value;
			break;
		case 'parameters':
			$array['parameters'] =$value;
			break;
		case 'maxGrade':
			$array['maxGrade'] =$value;
			break;
		case 'grade':
			$array['grade'] =$value;
			break;
		case 'teacherNotes':
			$array['teacherNotes'] =$value;
			break;
		case 'id':
			$array['id'] =$value;
			break;
		case 'status':
			$array['status'] =$value;
			break;
		case 'pointWorth':
			$array['pointWorth'] =$value;
			break;
		case 'pointList':
			$array['pointList'] =$value;
		case 'autoNotes':
			$array['pointList'] =$value;

		default:
			break;
	}
}

$url='';
$flag = false;
switch($array['header'])
{
	//------------------------------------------------------------------------
	case 'login':
		$url = 'afsaccess1.njit.edu/~mtr22/CS490/login.php';
		break;
	//------------------------------------------------------------------------
	case 'questionBankRequest':
		$url = 'afsaccess1.njit.edu/~mtr22/CS490/questionBankRequest.php';
		break;
	//------------------------------------------------------------------------
	case 'addQuestionRequest':
		$url = 'afsaccess1.njit.edu/~mtr22/CS490/addQuestionRequest.php';
		break;
	//------------------------------------------------------------------------
	case 'createExam':
		'afsaccess1.njit.edu/~mtr22/CS490/createExam.php';
		break;
	//------------------------------------------------------------------------
	case "teacherExamListRequest":
		$url = 'afsaccess1.njit.edu/~mtr22/CS490/teacherExamListRequest.php';
		break;
	//------------------------------------------------------------------------
	case 'studentExamListRequest':
		$url = 'afsaccess1.njit.edu/~mtr22/CS490/studentExamListRequest.php';
		break;
	//------------------------------------------------------------------------
	case 'takeExamRequest':
		$url = 'afsaccess1.njit.edu/~mtr22/CS490/takeExamRequest.php';
		break;
	//------------------------------------------------------------------------
	case 'examStudentList':
		$url = 'afsaccess1.njit.edu/~mtr22/CS490/studentExamListRequest.php';
		break;
	//------------------------------------------------------------------------
	case 'reviewExamRequest':
		$url = 'afsaccess1.njit.edu/~mtr22/CS490/reviewExamRequest.php';
		break;
	//------------------------------------------------------------------------
	case 'examUpdateRequest':
		$url = 'afsaccess1.njit.edu/~mtr22/CS490/examUpdateRequest.php';
		break;
	//------------------------------------------------------------------------
	case 'examReleaseRequest':
		$url = 'afsaccess1.njit.edu/~mtr22/CS490/examReleaseRequest.php';
		break;
    //------------------------------------------------------------------------
	case 'teacherExamScoreRequest':
		$url='afsaccess1.njit.edu/~mtr22/CS490/teacherExamScoreRequest.php';
		break;
	//------------------------------------------------------------------------
	case 'questionBankSortRequest':
		$url='afsaccess1.njit.edu/~mtr22/CS490/searchQuestionBank.php';
		break;
	//=========================================================================

	default:
		$flag = true;
		break;
}


if ($flag != true){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $array);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

	$response = curl_exec($curl);
	curl_close($curl);

	echo $response;
} else {
	$array['url']=$url;
	echo json_encode($array);
}


?>