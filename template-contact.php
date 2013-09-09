<?php
/*
Template Name: Kapcsolati oldal Sablon
*/
?>
<?php
  //response generation function

  $response = "";

  //function to generate response
  function generate_response($type, $message){
    
    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
    
  }

  //response messages
  $not_human       = "Person identifikasjon er feil.";
  $missing_content = "Vennligst oppgi all informasjon";
  $email_invalid   = "E-post er ikke korrekt.";
  $message_unsent  = "Melding er ikke sendt. Prøv igjen.";
  $message_sent    = "Takk! Din melding er sendt.";


  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $tel = $_POST['message_tel'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];
  $subjecto = $_REQUEST['ap_id'];
  $lakas = 'Leilighet '.get_the_title($subjecto);

  //php mailer variables
  //$to = get_option('admin_email');
  $to = 'alexander.tvedt@fanasparebank.no';
  $subject = "Message from ".get_bloginfo('name');
//  $headers = 'From: '. $email . "\r\n" .
//    'Reply-To: ' . $email . "\r\n";

$headers = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
//$headers .= "CC: casarustica@casarustica.hu\r\n";
$headers .= "MIME-Version: 1.0\r\n";
//$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  
if(!$human == 0){
    if($human != 2) generate_response("error", $not_human); //not human!
    else {
      
      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message) || empty($tel)){
          generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $message='Name: '.$name.'<br/>'.'Tel: '.$tel.'<br />'.'Subject: '.$lakas.'<br />'.$message;
          $sent = wp_mail($to, $subject, $message, $headers);
            if($sent) generate_response("success", $message_sent); //message sent!
            else generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  } 
  else 
    if ($_POST['submitted']) generate_response("error", $missing_content);

?>
<div class="main <?php echo roots_main_class(); ?>" role="main"> 
  <?php while (have_posts()) : the_post(); ?>
  <div class="contactwrap wrap">
    <div class="wrapped clearfix">
      <div <?php post_class('left'); ?>>
        <?php the_content(); ?>
      </div>
      <div class="right">
        <div id="gmap" class="gmap"></div>
      </div>
    </div><!-- /.wrapped -->
  </div><!-- /.contactwrap -->
  <?php endwhile; ?>
</div><!-- /.main -->

<div class="wrap formwrap clearfix">
  <div class="wrapped">
      <div id="respond" class="left">
  <h2>Kérdésed van? <small>Ne tartsd vissza</small></h2>
  <?php echo $response; ?>
  <form class="form-horizontal" action="<?php the_permalink(); ?>" method="post">
    <div class="controlsa clearfix">
        <label for="message_name">Név</label>
        <input type="text" required placeholder="Név" id="message_name" name="message_name" value="<?php echo $_POST['message_name']; ?>">
    </div>
    <div class="controlsa clearfix">
      <label for="message_email">E-mail</label>
      <input type="email" required placeholder="E-mail" id="message_email" name="message_email" value="<?php echo $_POST['message_email']; ?>">
    </div>



    <div class="controlsa clearfix">
        <label for="message_tel">Tel.</label>
        <input type="text" required placeholder="Tel." id="message_tel" name="message_tel" value="<?php echo $_POST['message_tel']; ?>">
    </div>


    <?php 
      $the_ap = new WP_Query ( 
        array(
          'post_type' => 'page',
          'posts_per_page'=>100,
          'orderby'=>'date',
          'order'=>'ASC',
          'post_parent__in'=>array(31,33,34,36,38)
         )
        );
    ?>    
    
    <div class="controlsa clearfix">
      <label for="ap_id">Tárgy</label>
      <select name="ap_id" id="ap_id">
        <option <?php if($ubjecto == 'Általános érdeklődés') echo 'selected'; ?> value="Általános érdeklődés">Általános érdeklődés</option>
          <?php while ( $the_ap->have_posts()) : $the_ap->the_post(); ?>
          <option <?php if($subjecto == get_the_ID()) echo 'selected'; ?> value="<?php the_ID(); ?>"><?php the_title(); ?></option>
          <?php endwhile; ?>
      </select>
    </div>

    <div class="controlsa clearfix">
        <label for="message_text">Üzenet</label>
        <textarea required placeholder="Üzenet szövege ..." rows="6" id="message_text" name="message_text" value="<?php echo $_POST['message_text']; ?>"></textarea>
    </div>

    <div class="aform-actions">
      <input type="hidden" name="message_human" value="2">
      <input type="hidden" name="submitted" value="1">
      <input type="submit" class="submitbtn btn" value="<?php _e('Mehet','roots'); ?>">
    </div>
  </form>

  </div><!-- /.left -->

    <div class="right">
      <div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="400" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
    </div>
  </div><!-- / .wrapped --> 
</div><!-- / .formwrap -->

