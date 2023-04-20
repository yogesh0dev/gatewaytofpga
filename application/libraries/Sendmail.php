<?php
/**
 * Send Mail
 * Create by Abed Putra
 * http://abedputra.com
 * Github: https://github.com/abedputra
 * 2017
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class SendMail{

    public function secureMail($fn,$ln,$em,$dt,$t,$tLe,$bro,$os,$ip,$url){
        $message = '';
        $message .= 'Hi ' .$fn.' '.$ln.',';
        $message .= '<br>';
        $message .= '<br>';
        $message .= 'Your account ' .$em.' was just used to sign in from '.$bro.' on '.$os.'.';
        $message .= '<br>';
        $message .= '<br>';
        $message .= '<table>';
        $message .= '<tr>';
        $message .= '<td>Your Username</td><td> : <b>' .$em.'</b></td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>From Browser</td><td> : <b>'.$bro.'</b></td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>From OS</td><td> : <b>'.$os.'</b><td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>From IP</td><td> : <b>'.$ip.'</b></td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Date</td><td> : <b>'.$dt.'</b></td>';
        $message .= '</tr>';
        $message .= '<tr>';
        $message .= '<td>Time</td><td> : <b>'.$t.'</b></td>';
        $message .= '</tr>';
        $message .= '</table>';
        $message .= '<br>';
        $message .= '<br>';
        $message .= 'Don\'t recognise this activity?';
        $message .= '<br>';
        $message .= 'Secure your account, from this link.';
        $message .= '<br>';
        $message .= '<a href='.$url.'><b>Login.</b></a>';
        $message .= '<br>';
        $message .= '<br>';
        $message .= 'Why are we sending this?<br>We take security very seriously and we want to keep you in the loop on important actions in your account.';
        $message .= '<br>';
        $message .= '<br>';
        $message .= 'Sincerely yours,<br>';
        $message .= $tLe;
        return $message;
    }
    
    public function sendRegister($ls,$em,$link,$tLe){
        
        $message = '';
        $message .= 'Hi, ' .$ls.'<br>';
        $message .= '<br>';
        $message .= 'Welcome! you have signed up with our website with the following information:<br>';
        $message .= '<br>';
        $message .= '<strong>Username : '.$em.'</strong><br>';
        $message .= '<strong>Password : (Not Set) </strong><br>';
        $message .= '<br>';
        $message .= 'Before you can login, you need to activate and set your Password';
        $message .= '<br>';
        $message .= 'account by clicking on this link:';
        $message .= '<br><br>';
        $message .= $link . '<br>';
        $message .= '<br>';
        $message .= 'Sincerely yours,<br>';
        $message .= $tLe;
        return $message;
    }
    
    public function sendForgot($ls,$em,$link,$tLe){
        
        $message = '';
        $message .= 'Hello, ' .$ls.'<br>';
        $message .= '<br>';
        $message .= 'We\'ve generated a new password for you at your<br>';
        $message .= 'request, you can use this new password with your username:<br>';
        $message .= '<br>';
        $message .= '<strong>Username : '.$em.'</strong><br>';
        $message .= '<strong>Password : (Forgot Password) </strong><br>';
        $message .= '<br>';
        $message .= 'To reset your Password please, clicking on this link:';
        $message .= '<br><br>';
        $message .= $link . '<br>';
        $message .= '<br>';
        $message .= 'Sincerely yours,<br>';
        $message .= $tLe;
        return $message;
    }
	
	public function sendValidGuest($ls,$em,$link,$vtoken,$tLe){
        
        $message = '';
        $message .= 'Hi '.$ls.' '.$em.',<br>';
        $message .= '<br>';
        $message .= 'Welcome! you have booked a demo with GATEWAY TO FPGA, please process with vlidating your email id with us.<br>';
        $message .= '<br>';
        $message .= '<strong>VALIDATION TOKEN : '.$vtoken.'</strong><br>';
        $message .= '<br>';
        // $message .= 'Your Validation link';
        // $message .= '<br><br>';
        // $message .= $link . '<br>';
        $message .= '<br>';
        $message .= 'Sincerely yours,<br>';
        $message .= $tLe;
        return $message;
    }

	public function sendFormsData($enquery,$ls,$em,$link,$tLe){
        
		$result='';
		$result.='<table><th>Parameter</th><th>Value</th><tbody>';
		foreach($ls as $x => $val) {
			if($x=='resume'){
				$vals=site_url().'uploads/resume/'.$val;
				$val='<a href="'.$vals.'">Click to see Resume</a>';
			}
			if($x=='avatar'){continue;}
		  $result.='<tr><td>'.$x.'</td><td>'.ucfirst($val).'</td></tr>';
		}
	
		$result.='</tbody></table>';
        $message = '';
        $message .= 'Hi Admin,<br>';
        $message .= '<br>';
        $message .= 'You have got a new '.$enquery.' enquiry.  <br>';
        $message .= 'Here are the details:<br>';
        $message .= '<br>';
        $message .= $result;
        $message .= '<br>';
       
        $message .= '<br>';
        $message .= 'Sincerely yours,<br>';
        $message .= $tLe;
        return $message;
    }

}
