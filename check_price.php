<?php
   function check_price($value)
   {

         switch($value)
         {
            case "s1":
                return '99';
            break;
            case "s2":
                return '158';
            break;
            case "s3":
                 return '177';
            break;
            case "d1":
                return '178';
            break;
            case "d2":
                return '276';
            break;
            case "d3":
                return '294';
            break;
            case "c1":
                return '3225';
            break;
            case "c2":
                return '4950';
            break;
            case "c3":
                return '8900';
            break;
         }  
    }


    function check_plan_name($value)
    {

          switch($value)
          {
             case "s1":
                 return 'Single Membership for 1 month';
             break;
             case "s2":
                 return 'Single Membership for 2 month';
             break;
             case "s3":
                  return 'Single Membership for 3 month';
             break;
             case "d1":
                 return 'Dual Membership for 1 month';
             break;
             case "d2":
                 return 'Dual Membership for 2 month';
             break;
             case "d3":
                 return 'Dual Membership for 3 month';
             break;
             case "c1":
                 return 'Corporate for 1 month Memberships 25 Accounts';
             break;
             case "c2":
                 return 'Corporate for 2 month Memberships 50 Accounts';
             break;
             case "c3":
                 return 'Corporate for 3 month Memberships 100 Accounts';
             break;
          }  
     }


     function check_end_date($value)
     {

           switch($value)
           {
              case "s1":
                  return date('Y-m-d', strtotime('+1 months'));
              break;
              case "s2":
                  return date('Y-m-d', strtotime('+2 months'));
              break;
              case "s3":
                   return date('Y-m-d', strtotime('+3 months'));
              break;
              case "d1":
                  return date('Y-m-d', strtotime('+1 months'));
              break;
              case "d2":
                  return date('Y-m-d', strtotime('+2 months'));
              break;
              case "d3":
                  return date('Y-m-d', strtotime('+3 months'));
              break;
              case "c1":
                  return date('Y-m-d', strtotime('+1 months'));
              break;
              case "c2":
                  return date('Y-m-d', strtotime('+2 months'));
              break;
              case "c3":
                  return date('Y-m-d', strtotime('+3 months'));
              break;
           }  
      }
    
  ?>