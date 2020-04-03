jQuery( document ).ready(function() {
	/*translating strings*/ 
// 	jQuery("#tribe_ticket_list_table .ticket_price:nth-child(2)").remove();
// 	jQuery("#tribe_ticket_list_table .ticket_edit_button").on("click",function(){
// 		setTimeout(function(){
// 			jQuery("#ticket_form_main .price.tribe-active:nth-child(3)").remove();
// 		},2000)
// 	})
	
	setTimeout(function(){
		//alert(jQuery("#tribe_events_event_details h2.ui-sortable-handle span").html());
		jQuery("#tribe_events_event_details h2.ui-sortable-handle span").text("Der Event Kalender");
		jQuery("#tribe_ticket_list_table th.ticket_available").text("Verfügbar");
		jQuery("#tribe_ticket_list_table th.ticket_capacity").text("Kapazität");
		var get_view_att_text = jQuery(".ticket_list_container .ticket_table_intro").find("a:eq(1)").text();
		if(jQuery.trim(get_view_att_text)=="View Attendees"){
			jQuery(".ticket_list_container .ticket_table_intro").find("a:eq(1)").text("Teilnehmerliste anschauen");
		}
	},2000);
	

	jQuery(".ticket_edit_button").on("click",function(){
		setTimeout(function(){
				jQuery("#ticket_form_save").val("Ticket speichern");
				var move = jQuery(".ticket_bottom #ticket_bottom_right").find("a:eq(0)").text();
				if(jQuery.trim(move)=="Move Ticket"){
					jQuery(".ticket_bottom #ticket_bottom_right").find("a:eq(0)").text("Ticket verschieben");
				}
				jQuery(".ticket_bottom #ticket_bottom_right").find("a:eq(1)").text("Ticket löschen");
		},3000)
	})
	jQuery("#settings_form_toggle").on("click",function(){
		setTimeout(function(){
			jQuery("#tribe_settings_form_save").val("Einstellungen speichern");
			jQuery("#tribe-tickets-image .tribe-tickets-image-upload .input_block p.description").text("Bitte wählen Sie ein Bild aus der Medienbibliothek aus welches in der Ticket E-Mail benutzt wird. Am besten im Dateiformat: jpg, png oder gif, mindestens 1160px breit. Danke!");
		},3000)
	})
	
	/*end translations*/
	
      
    jQuery( "a.load_attendees" ).click(function() {		   
	   
	 }); 
	 
	//setInterval(load_eventId, 3000);
	load_eventId();
	function load_eventId(){
	    var post_id = jQuery("#post_ID").val();
		
	   var post_type = jQuery("#post_type").val();
	   if(post_id !==""){
		   if(post_type ==='tribe_events'){
			  load_subevents(post_id);
			  load_subevents_start(post_id);
			  load_subevents_end(post_id);
			  load_select_leader(post_id);
			  load_event_type(post_id)
			   
			}
	   }else{
		   load_eventId();
	   }
	}
	
	
	function load_subevents(post_id){ 
       alert('hi');
	   jQuery.ajax({
				type: "POST", 		//GET or POST or PUT or DELETE verb
				url: 'http://callanerd.de/demo3/wp-admin/admin-ajax.php', 		// Location of the service
				data : {
							action : 'loadSubeventsIntoTextbox',
							dataVal : 'tt',							
							post_id : post_id
						},
						
				dataType: "json",
				success: function (data) {//On Successful service call
					console.log(data);
					jQuery.each(data, function(index, value) {						
						jQuery("#"+index).val(value);
						
						var setIds = index+"_attendees" ;
						var appendTxt = '<p data="'+index+'" id="'+setIds+'" class="load_Attendees_List">Teilnehmer anzeigen</p>';
						jQuery("#"+index).parent().parent().append( appendTxt); 
						
					});
					
					
				}
				
			});

		return false;
	}


		function load_subevents_start(post_id){ 
       
	   jQuery.ajax({
				type: "POST", 		//GET or POST or PUT or DELETE verb
				url: 'http://callanerd.de/demo3/wp-admin/admin-ajax.php', 		// Location of the service
				data : {
							action : 'loadSubeventsStartsIntoTextbox',
							dataVal : 'tt',							
							post_id : post_id
						},
						
				dataType: "json",
				success: function (data) {//On Successful service call
					
					jQuery.each(data, function(index, value) {	//alert(index+"="+value);					
						jQuery("#"+index).attr('value',value);
						 
						//alert("Here");
					});
					
					
				}
				
			});

		return false;
	}

	function load_subevents_end(post_id){ 
       
	   jQuery.ajax({
				type: "POST", 		//GET or POST or PUT or DELETE verb
				url: 'http://callanerd.de/demo3/wp-admin/admin-ajax.php', 		// Location of the service
				data : {
							action : 'loadSubeventsEndIntoTextbox',
							dataVal : 'tt',							
							post_id : post_id
						},
						
				dataType: "json",
				success: function (data) {//On Successful service call
					jQuery.each(data, function(index, value) {	
						//alert(jQuery("#"+index).val());					
						jQuery("#"+index).val(value);
						 
						
					});
					
					
				}
				
			});

		return false;
	}
	function load_select_leader(post_id){ 
       
	   jQuery.ajax({
				type: "POST", 		//GET or POST or PUT or DELETE verb
				url: 'http://callanerd.de/demo3/wp-admin/admin-ajax.php', 		// Location of the service
				data : {
							action : 'loadSubeventsLeaderIntoSelectbox',
							dataVal : 'tt',							
							post_id : post_id
						},
						
				dataType: "json",
				success: function (data) {//On Successful service call
					jQuery.each(data, function(index, value) {						
						jQuery("#"+index).val(value);
					});					
				}
				
			});

		return false;
	}
	function load_event_type(post_id){ 
       
	   jQuery.ajax({
				type: "POST", 		//GET or POST or PUT or DELETE verb
				url: 'http://callanerd.de/demo3/wp-admin/admin-ajax.php', 		// Location of the service
				data : {
							action : 'loadSubeventsTypeIntoSelectbox',
							dataVal : 'tt',							
							post_id : post_id
						},
						
				dataType: "json",
				success: function (data) {//On Successful service call
					jQuery.each(data, function(index, value) {						
						jQuery("#"+index).val(value);
					});					
				}
				
			});

		return false;
	}
	
	
	
	//Add Text Box 
	
	var myVar = setInterval(function(){ find_details_button(); }, 2000);
	
	function find_details_button(){
		var details_Option_Count  = jQuery(".tribe-recurrence-details-option").length;
		if(details_Option_Count >0){
			myStopFunction();
			load_details_button();
		}
	}	

	function myStopFunction() {
		clearInterval(myVar);
	}
	
	
	function load_details_button(){	  
	}
	
	
	
	 jQuery(document).on("click", '.load_Attendees_List', function(event) { 
	    var post_id = jQuery("#post_ID").val();
		var subEventId =  jQuery(this).attr('data');            		
		var id =  jQuery(this).attr('id');            		
			 
		 jQuery.ajax({
				type: "POST", 		//GET or POST or PUT or DELETE verb
				url: 'http://callanerd.de/demo3/wp-admin/admin-ajax.php', 		// Location of the service
				data : {
							action : 'loadAttendeesListByEventId',
							dataVal : 'loadAttendees',							
							post_id : post_id,
							currentSubEventId: subEventId,
							subEventId:subEventId,
							id: id
						},
						
				dataType: "json",
				success: function (data) {//On Successful service call
					if(data['success']===1){						
					     jQuery(".load_Attendees_Result").remove();
						 jQuery( '<div class="load_Attendees_Result">'+data['html']+'</div>' ).insertAfter( "#"+id );
						 hidegradeoptions();	
					}else{
						alert("Something wrong");
					}
					
					
					
				}
				
			});

		return false;
        
    });//load_Attendees_List
	
	
	//Attendees list_close
	 jQuery(document).on("click", '.list_close', function(event) { 	    	            		
	 
		var id =  jQuery(this).parent().remove();			
		
	  });
	
	//grade_save of each subgroup according Subgroup
	
	 jQuery(document).on("click", '.grade_save', function(event) { 
	    var post_id = jQuery("#post_ID").val();		            		
		var id =  jQuery(this).attr('id');
		var subEventId =  jQuery(this).attr('subEventId');
		
		var arr = [];
		var attendeed_id ="";
        var grade =  "";
		var checkId  = "";
		var checkBx  = "";
		jQuery("."+id).each(function() {
						
			attendeed_id = jQuery(this).attr('attendeed_id');
			checkId = subEventId+'_check_'+post_id+'_'+attendeed_id;
			//alert(checkId);
			if ( jQuery("#"+checkId).is(':checked') ) {
				checkBx = 1;
			} 
			else {
				checkBx = "";
			}

			
			grade = jQuery(this).val();
			arr.push({attendeed_id:attendeed_id,grade:grade,subEventId:subEventId,checkBx:checkBx}); 
		});
		
		 jQuery.ajax({
				type: "POST", 		//GET or POST or PUT or DELETE verb
				url: 'http://callanerd.de/demo3/wp-admin/admin-ajax.php', // Location of the service
				data : {
							action : 'gradeSaveOfAttendeesListBySubEvent',
							dataVal : 'grade_save',							
							post_id : post_id,
							arr: arr,							
							id: id,
							subEventId:subEventId				
						},
						
				dataType: "json",
				success: function (data) {//On Successful service call
				
					if(data['success']===1){						
					     jQuery(".gradeMsg").remove();
						 jQuery( '<div class="gradeMsg">Daten wurden erfolgreich gespeichert</div>' ).insertAfter( "#"+id );
							
					}else{
						alert("Something wrong");
					}
					
					
					
				}
				
			});

		return false;
		
		
	  });//grade_save



	//************************************** Send Sentificate ********************************/
	
	jQuery(document).on("click", '#sendcertiFicateBtn', function(event) { 
	    var post_id = jQuery("#post_ID").val();		            		
		var id =  jQuery(this).attr('id');
		var post_id =  jQuery(this).attr('data');
		var child_path =  jQuery("#child_path").val()+'/generate_pdf/generate_pdf.php';
		var child_path_grade =  jQuery("#child_path").val()+'/generate_pdf/grade_generate_pdf.php';
		var ajaxUrl = 'http://callanerd.de/demo3/wp-admin/admin-ajax.php';
		
		
		
		
		 jQuery.ajax({
				type: "POST", 		//GET or POST or PUT or DELETE verb
				url: child_path, // Location of the service
				data : {
							action : 'sendCertificateFromPostAdmin',
							dataVal : 'send_certificate',							
							post_id : post_id
										
						},
						
				dataType: "json",
				success: function (data) {//On Successful service call
				
					if(data['success']==1){						
					    
						 jQuery( '#msg_result' ).html("E-Mail wurde erfolgreich gesendet!");
						
						jQuery.ajax({
							type: "POST", 		//GET or POST or PUT or DELETE verb
							url: child_path_grade, // Location of the service
							data : {
										action : 'sendCertificateFromPostAdmin',
										dataVal : 'send_certificate',							
										post_id : post_id
													
									},
									
							dataType: "json",
							success: function (data) {//On Successful service call
							
								if(data['success']==1){						
									
									 jQuery( '#msg_result' ).html("Notenzertifikat E-Mail wurde erfolgreich verschickt");

									
										
								}else{
									alert("Something wrong");
								}
								
								
								
							}
							
						});
                         
						
							
					}else{
						alert("Something wrong");
					}
					if(data['runing']=='1'){
						 jQuery( '#msg_result' ).html("Course is runing!");
					}
					
					
					
				}
				
			});

		return false;

		
		
	  });//sendcertiFicateBtn
	  
	  
	//************************************** Send documents after course ********************************/
	
	jQuery(document).on("click", '#senddocxaftercourse', function(event) { 
	    var post_id = jQuery("#post_ID").val();		            		
		var id =  jQuery(this).attr('id');
		var post_id =  jQuery(this).attr('data');
		var child_path =  jQuery("#child_path").val()+'/send_docs_after_course.php';
		//var child_path_grade =  jQuery("#child_path").val()+'/send_docs_after_course.php';
		//var ajaxUrl = 'http://callanerd.de/demo3/wp-admin/admin-ajax.php';
		
		 jQuery.ajax({
				type: "POST", 		//GET or POST or PUT or DELETE verb
				url: child_path, // Location of the service
				data : {
							action : 'sendDocumentFromPostAdmin',
							dataVal : 'send_docs',							
							post_id : post_id
										
						},
						
				dataType: "json",
				success: function (data) {//On Successful service call
				
					if(data['success']==1){						
					    
						 jQuery( '#msg_result' ).html("E-Mail wurde erfolgreich gesendet!");
					}else{
						alert("Something wrong");
					}
					
				}
				
			});

		return false;

		
		
	  });//senddocs
	  ///******************* SEND EMAIL TO Attendees ABOUT SUB EVENT GRADING SINGLE*******************/
	  jQuery(document).on("click", '.send_subevent_pdf', function(event) { 
	    var post_id = jQuery("#post_ID").val();		            		
		var id =  jQuery(this).attr('id');
		var subEventId =  jQuery(this).attr('subEventId');
		//alert(post_id +"-"+id+"-"+subEventId);		
		
		var child_path_sub =  jQuery("#child_path").val()+'/generate_pdf/subevent_generate_pdf.php';
		
		 jQuery.ajax({
				type: "POST", 		//GET or POST or PUT or DELETE verb
				url: child_path_sub, // Location of the service
				data : {
							action : 'send_sub_event',
							dataVal : 'send_sub_event_certificate',							
							post_id : post_id,
							subEventId:subEventId
										
						},
						
				dataType: "json",
				success: function (data) {//On Successful service call
				
				
					if(data['success']==1){
						 jQuery(".gradeMsg").remove();
						 jQuery( '<div class="gradeMsg">E-Mail wurde erfolgreich gesendet</div>' ).insertAfter( "#"+id );	
					}else{
						alert("Something wrong");
					}
					if(data['runing']=='1'){
						 jQuery( '#msg_result' ).html("Course is runing!");
					}					
					
				}
				
			});

		return false;
	  
	   });//sendcertiFicateBtn
	  

	  //Grade show hide
	  jQuery(document).on("click", '.chkboxGrade', function(event) { 
		if ( jQuery(this).is(':checked') ) {
				
				jQuery("#"+jQuery(this).attr('id')+'_sp').show();
			} 
			else {
				jQuery("#"+jQuery(this).attr('id')+'_sp').hide();
			}
	  
	   });//chkboxGrade
	   setTimeout(function(){
	   	jQuery(".tribe-event-recurrence.tribe-event-recurrence-rule").each(function(index,value){
	   	///alert("Dsfds");
		   var tex = jQuery("#"+"recurrence_rule_"+index+"_type_event_type").val();
		   if(tex=="only_grade"){
		   	jQuery("#"+"recurrence_rule_"+index+"_type_subevent_start").hide();
		   	jQuery("#"+"recurrence_rule_"+index+"_type_subevent_end").hide();
		   }
		   if(tex=="without_grade"){
		  // 	alert(".recurrence_rule_"+index+"_type_subevent_grade_container .marks_notes");
		   	jQuery(".recurrence_rule_"+index+"_type_subevent_grade_container table th.marks_notes").hide();
		   	jQuery(".recurrence_rule_"+index+"_type_subevent_grade_container table th.givennumbers").hide();
		   }

	   })
	   jQuery(document).on("change",".selection_event_type",function(){
	   var tex =jQuery(this).val();
	   jQuery(this).parent().addClass("selection_done");
	   	if(tex=="only_grade"){
			   jQuery(".selection_done .subevent_start").hide();
			   	jQuery(".selection_done .subevent_end").hide();
			   }else{
			   	jQuery(".selection_done .subevent_start").show();
			   	jQuery(".selection_done .subevent_start").show();
			   }
		jQuery(this).parent().removeClass("selection_done");  
	   })
	   },1000)
	   
	   function hidegradeoptions(){
		   	jQuery(".tribe-event-recurrence.tribe-event-recurrence-rule").each(function(index,value){
			   var tex = jQuery("#"+"recurrence_rule_"+index+"_type_event_type").val();
			   if(tex=="only_grade"){
			   	jQuery("#"+"recurrence_rule_"+index+"_type_subevent_start").hide();
			   	jQuery("#"+"recurrence_rule_"+index+"_type_subevent_end").hide();
			   	jQuery(".recurrence_rule_"+index+"_type_subevent_grade_container table th.pre_abs").hide();
		   		jQuery(".recurrence_rule_"+index+"_type_subevent_grade_container table th.preabs_col").hide();
		   		jQuery("#recurrence_rule_"+index+"_type_subevent_gradesub").hide();
		   		
			   }
			   if(tex=="without_grade"){
			   	jQuery(".recurrence_rule_"+index+"_type_subevent_grade_container table th.marks_notes").hide();
			   	jQuery(".recurrence_rule_"+index+"_type_subevent_grade_container table th.givennumbers").hide();
			   }
		   })	   	
	   }


});//Main ready Close