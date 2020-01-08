<?php
/*
	Plugin name: Valida Form
	Description: Este plugin importa as lib's do jquery validator
    validator para o wordpress
    Version: 1.0
    Author: Caique dos Santos Oliveira
    License: GPLv2 or later
*/
 
/**
 * Add jQuery Validation script on posts.
 */
function pbd_vc_scripts() {
	if(is_single() ) {
		wp_enqueue_script(
			'jquery-validate',
			plugin_dir_url( __FILE__ ) . 'js/jquery.validate.min.js',
			array('jquery'),
			'1.10.0',
			true
		);
		
		wp_enqueue_style(
			'jquery-validate',
			plugin_dir_url( __FILE__ ) . 'css/style.css',
			array(),
			'1.0'
		);
	}
}
add_action('template_redirect', 'pbd_vc_scripts');

/**
 * Initiate the script.
 * Calls the validation options on the comment form.
 */
function pbd_vc_init() { ?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			
			$('#commentform').validate({
				 rules : {
             'nome':{
                    required:true,
                    minlength:3
             },
             'email':{
                    required:true
             },
              'tel':{
                    required:true,
                    minlength:11
             },
             'dtNascimento':{
                    required:true,
                    minlength:8
             },
             'cep':{
                    required:true,
                    minlength:8
             },
             'endereco':{
                    required:true,
                    minlength:4
             },
             'numero':{
                    required:true,
                    minlength:1
             },
             'bairro':{
                    required:true,
             },
              'cidade':{
                    required:true,
             },
             'estado':{
                    required:true
             }                                
       },
				
				messages: {
					nome: "Please enter a valid name.",
					email: "Please enter a valid email address.",
					tel: "Please use a valid website address.",
					dtNascimento: "Message must be at least 20 characters."
					cep: "Message must be at least 20 characters."
					endereco: "Message must be at least 20 characters."
					numero: "Message must be at least 20 characters."
					bairro: "Message must be at least 20 characters."
					cidade: "Message must be at least 20 characters."
					estado: "Message must be at least 20 characters."

				}
			});
		});
	</script>
<?php }
add_action('wp_footer', 'pbd_vc_init', 999);

?>