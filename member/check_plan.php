<?php
   function check_plan($value)
   {

         switch($value)
         {
            case "s1":
                echo 'Single Membership for 1 month';
            break;
            case "s2":
                echo 'Single Membership for 2 months';
            break;
            case "s3":
                 echo 'Single Membership for 3 months';
            break;
            case "d1":
                echo 'Dual Membership for 1 month';
            break;
            case "d2":
                echo 'Dual Membership for 2 months';
            break;
            case "d3":
                echo 'Dual Membership for 3 months';
            break;
            case "c1":
                echo 'Corporate Membership for 25 Accounts';
            break;
            case "c2":
                echo 'Corporate Membership for 50 Accounts';
            break;
            case "c3":
                echo 'Corporate Membership for 100 Accounts';
            break;
         }  
    }
    
  ?>