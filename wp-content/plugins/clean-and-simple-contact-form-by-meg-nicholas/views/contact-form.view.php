<p><?php echo $message; ?></p>

<form id="frmContact" name="frmContact" method="post">

<?php wp_nonce_field('cff_contact','cff_nonce'); ?>

<!-- Clean and Simple Contact Form by megnicholas. Version <?php echo $version; ?> -->

  <!--email address -->
  <div class="control-group<?php 
    if (isset($contact->Errors['Email'])) echo ' error'; ?>">
     <label class="control-label" for="cf-Email"><?php _e('Dirección de correo:','cleanandsimple');?></label>
     <div class="controls">
       <input class="input-xlarge {email:true, required:true, messages:{required:'<?php _e('Proporcione una dirección de correo.','cleanandsimple');?>',email:'<?php _e('Ingrese una dirección de correo válida.','cleanandsimple');?>'}}" type="text" id="cf-Email" name="cf-Email" value="<?php echo $contact->Email; ?>" placeholder="<?php _e('Su dirección de correo','cleanandsimple');?>">
       <span for="cf-Email" generated="true" class="help-inline" style=""><?php if (isset($contact->Errors['Email'])) echo $contact->Errors['Email']; ?></span>
     </div>
  </div>

  <!--confirm email address -->
  <div class="control-group<?php 
    if (isset($contact->Errors['Confirm-Email'])) echo ' error'; ?>">
     <label class="control-label" for="cfconfirm-email"><?php _e('Confirme su dirección de correo:','cleanandsimple');?></label>
     <div class="controls">
       <input class="input-xlarge {email:true, required:true, equalTo:'#cf-Email', messages:{equalTo:'<?php _e('Ingrese nuevamente la dirección de correo.','cleanandsimple');?>',required:'<?php _e('Ingrese nuevamente la dirección de correo.','cleanandsimple');?>'}}" type="text" id="cfconfirm-email" name="cfconfirm-email" value="<?php echo $contact->ConfirmEmail; ?>" placeholder="<?php _e('Confirme su dirección de correo','cleanandsimple');?>">
       <span for="cfconfirm-email" generated="true" class="help-inline" style=""><?php if (isset($contact->Errors['Confirm-Email'])) echo $contact->Errors['Confirm-Email']; ?></span>
     </div>
  </div>              

<!-- name --> 
 <div class="control-group<?php 
    if (isset($contact->Errors['Name'])) echo ' error'; ?>">
     <label class="control-label" for="cf-Name"><?php _e('Nombre:','cleanandsimple');?></label>
     <div class="controls">
       <input class="input-xlarge {required:true, messages:{required:'<?php _e('Ingrese su nombre.','cleanandsimple');?>'}}" type="text" id="cf-Name" name="cf-Name" value="<?php echo $contact->Name; ?>" placeholder="<?php _e('Su Nombre','cleanandsimple');?>">
       <span for="cf-Name" generated="true" class="help-inline" style=""><?php if (isset($contact->Errors['Name'])) echo $contact->Errors['Name']; ?></span>
     </div>
  </div>  

 <!-- message -->
  <div class="control-group<?php 
    if (isset($contact->Errors['Message'])) echo ' error'; ?>">
     <label class="control-label" for="cf-Message"><?php _e('Consulta:','cleanandsimple');?></label>
     <div class="controls">
       <textarea class="input-xlarge {required:true, messages:{required:'<?php _e('Ingrese la consulta.','cleanandsimple');?>'}}" id="cf-Message" name="cf-Message" rows="10" placeholder="<?php _e('Su Consulta','cleanandsimple');?>"><?php echo $contact->Message; ?></textarea>
       <span for="cf-Message" generated="true" class="help-inline" style=""><?php if (isset($contact->Errors['Message'])) echo $contact->Errors['Message']; ?></span>
     </div>
  </div>

  <div class="control-group">
    <div class="controls">
        <button type="submit" class="btn"><?php _e('Enviar Mensaje','cleanandsimple');?></button>
    </div>
  </div>	  
</form>