<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GrapesJS Page Builder</title>
    <meta content="Best Free Open Source Responsive Websites Builder" name="description">
    <link rel="stylesheet" href="https://grapesjs.com/stylesheets/toastr.min.css">
    <link rel="stylesheet" href="https://grapesjs.com/stylesheets/grapes.min.css?v0.20.4">
    <link rel="stylesheet" href="https://grapesjs.com/stylesheets/grapesjs-preset-webpage.min.css">
    <link rel="stylesheet" href="https://grapesjs.com/stylesheets/tooltip.css">
    <link rel="stylesheet" href="https://grapesjs.com/stylesheets/demos.css?v3">
    <link href="https://unpkg.com/grapick/dist/grapick.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://grapesjs.com/js/toastr.min.js"></script>
    <script src="https://grapesjs.com/js/grapes.min.js?v0.20.4"></script>
    <script src="https://unpkg.com/grapesjs-preset-webpage@1.0.2"></script>
    <script src="https://unpkg.com/grapesjs-blocks-basic@1.0.1"></script>
    <script src="https://unpkg.com/grapesjs-plugin-forms@2.0.5"></script>
    <script src="https://unpkg.com/grapesjs-component-countdown@1.0.1"></script>
    <script src="https://unpkg.com/grapesjs-plugin-export@1.0.11"></script>
    <script src="https://unpkg.com/grapesjs-tabs@1.0.6"></script>
    <script src="https://unpkg.com/grapesjs-custom-code@1.0.1"></script>
    <script src="https://unpkg.com/grapesjs-touch@0.1.1"></script>
    <script src="https://unpkg.com/grapesjs-parser-postcss@1.0.1"></script>
    <script src="https://unpkg.com/grapesjs-tooltip@0.1.7"></script>
    <script src="https://unpkg.com/grapesjs-tui-image-editor@0.1.3"></script>
    <script src="https://unpkg.com/grapesjs-typed@1.0.5"></script>
    <script src="https://unpkg.com/grapesjs-style-bg@2.0.1"></script>

    <style type="text/css">
        .icons-flex {
          background-size: 70% 65% !important;
          height: 15px;
          width: 17px;
          opacity: 0.9;
        }
        .icon-dir-row {
          background: url("./img/flex-dir-row.png") no-repeat center;
        }
        .icon-dir-row-rev {
          background: url("./img/flex-dir-row-rev.png") no-repeat center;
        }
        .icon-dir-col {
          background: url("./img/flex-dir-col.png") no-repeat center;
        }
        .icon-dir-col-rev {
          background: url("./img/flex-dir-col-rev.png") no-repeat center;
        }
        .icon-just-start{
         background: url("./img/flex-just-start.png") no-repeat center;
        }
        .icon-just-end{
         background: url("./img/flex-just-end.png") no-repeat center;
        }
        .icon-just-sp-bet{
         background: url("./img/flex-just-sp-bet.png") no-repeat center;
        }
        .icon-just-sp-ar{
         background: url("./img/flex-just-sp-ar.png") no-repeat center;
        }
        .icon-just-sp-cent{
         background: url("./img/flex-just-sp-cent.png") no-repeat center;
        }
        .icon-al-start{
         background: url("./img/flex-al-start.png") no-repeat center;
        }
        .icon-al-end{
         background: url("./img/flex-al-end.png") no-repeat center;
        }
        .icon-al-str{
         background: url("./img/flex-al-str.png") no-repeat center;
        }
        .icon-al-center{
         background: url("./img/flex-al-center.png") no-repeat center;
        }

         [data-tooltip]::after {
           background: rgba(51, 51, 51, 0.9);
         }

         .gjs-pn-commands {
           min-height: 40px;
         }

         #gjs-sm-float {
            display: none;
         }

         .gjs-logo-version {
           background-color: #756467;
         }

        .gjs-pn-btn.gjs-pn-active {
          box-shadow: none;
        }

        .CodeMirror {
          min-height: 450px;
          margin-bottom: 8px;
        }
        .grp-handler-close {
          background-color: transparent;
          color: #ddd;
        }

        .grp-handler-cp-wrap {
          border-color: transparent;
        }
    </style>
  </head>
  <body>
   
    
    <div id="gjs" style="height:0px; overflow:hidden">
    	<?php get_header(); ?>
    	
      <?php $_html_tpl_data=get_post_meta($post_id,'_html_tpl_data')[0];

      $doc = new DOMDocument();
			$doc->loadHTML($_html_tpl_data, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
			$_html_tpl_data = $doc->saveHTML();

			echo $_html_tpl_data;
       ?>
     
       <?php get_footer(); ?>
    </div>
    
   

    <script type="text/javascript">
      var lp = './img/';
      var plp = 'https://via.placeholder.com/350x250/';
      var images = [
        lp + 'team1.jpg',
        lp + 'team2.jpg',
        lp + 'team3.jpg',
        plp + '78c5d6/fff',
        plp + '459ba8/fff',
        plp + '79c267/fff',
        plp + 'c5d647/fff',
        plp + 'f28c33/fff',
        plp + 'e868a2/fff',
        plp + 'cc4360/fff',
        lp + 'work-desk.jpg',
        lp + 'phone-app.png',
        lp + 'bg-gr-v.png'
      ];

      var editor  = grapesjs.init({
        height: '100%',
        container : '#gjs',
        fromElement: true,
        showOffsets: true,
        assetManager: {
          custom: true,
          assets: images
        },
        storageManager: false,
        selectorManager: { componentFirst: true },
        styleManager: {
          sectors: [{
              name: 'General',
              properties:[
                {
                  extend: 'float',
                  type: 'radio',
                  default: 'none',
                  options: [
                    { value: 'none', className: 'fa fa-times'},
                    { value: 'left', className: 'fa fa-align-left'},
                    { value: 'right', className: 'fa fa-align-right'}
                  ],
                },
                'display',
                { extend: 'position', type: 'select' },
                'top',
                'right',
                'left',
                'bottom',
              ],
            }, {
                name: 'Dimension',
                open: false,
                properties: [
                  'width',
                  {
                    id: 'flex-width',
                    type: 'integer',
                    name: 'Width',
                    units: ['px', '%'],
                    property: 'flex-basis',
                    toRequire: 1,
                  },
                  'height',
                  'max-width',
                  'min-height',
                  'margin',
                  'padding'
                ],
              },{
                name: 'Typography',
                open: false,
                properties: [
                    'font-family',
                    'font-size',
                    'font-weight',
                    'letter-spacing',
                    'color',
                    'line-height',
                    {
                      extend: 'text-align',
                      options: [
                        { id : 'left',  label : 'Left',    className: 'fa fa-align-left'},
                        { id : 'center',  label : 'Center',  className: 'fa fa-align-center' },
                        { id : 'right',   label : 'Right',   className: 'fa fa-align-right'},
                        { id : 'justify', label : 'Justify',   className: 'fa fa-align-justify'}
                      ],
                    },
                    {
                      property: 'text-decoration',
                      type: 'radio',
                      default: 'none',
                      options: [
                        { id: 'none', label: 'None', className: 'fa fa-times'},
                        { id: 'underline', label: 'underline', className: 'fa fa-underline' },
                        { id: 'line-through', label: 'Line-through', className: 'fa fa-strikethrough'}
                      ],
                    },
                    'text-shadow'
                ],
              },{
                name: 'Decorations',
                open: false,
                properties: [
                  'opacity',
                  'border-radius',
                  'border',
                  'box-shadow',
                  'background', // { id: 'background-bg', property: 'background', type: 'bg' }
                ],
              },{
                name: 'Extra',
                open: false,
                buildProps: [
                  'transition',
                  'perspective',
                  'transform'
                ],
              },{
                name: 'Flex',
                open: false,
                properties: [{
                  name: 'Flex Container',
                  property: 'display',
                  type: 'select',
                  defaults: 'block',
                  list: [
                    { value: 'block', name: 'Disable'},
                    { value: 'flex', name: 'Enable'}
                  ],
                },{
                  name: 'Flex Parent',
                  property: 'label-parent-flex',
                  type: 'integer',
                },{
                  name: 'Direction',
                  property: 'flex-direction',
                  type: 'radio',
                  defaults: 'row',
                  list: [{
                    value: 'row',
                    name: 'Row',
                    className: 'icons-flex icon-dir-row',
                    title: 'Row',
                  },{
                    value: 'row-reverse',
                    name: 'Row reverse',
                    className: 'icons-flex icon-dir-row-rev',
                    title: 'Row reverse',
                  },{
                    value: 'column',
                    name: 'Column',
                    title: 'Column',
                    className: 'icons-flex icon-dir-col',
                  },{
                    value: 'column-reverse',
                    name: 'Column reverse',
                    title: 'Column reverse',
                    className: 'icons-flex icon-dir-col-rev',
                  }],
                },{
                  name: 'Justify',
                  property: 'justify-content',
                  type: 'radio',
                  defaults: 'flex-start',
                  list: [{
                    value: 'flex-start',
                    className: 'icons-flex icon-just-start',
                    title: 'Start',
                  },{
                    value: 'flex-end',
                    title: 'End',
                    className: 'icons-flex icon-just-end',
                  },{
                    value: 'space-between',
                    title: 'Space between',
                    className: 'icons-flex icon-just-sp-bet',
                  },{
                    value: 'space-around',
                    title: 'Space around',
                    className: 'icons-flex icon-just-sp-ar',
                  },{
                    value: 'center',
                    title: 'Center',
                    className: 'icons-flex icon-just-sp-cent',
                  }],
                },{
                  name: 'Align',
                  property: 'align-items',
                  type: 'radio',
                  defaults: 'center',
                  list: [{
                    value: 'flex-start',
                    title: 'Start',
                    className: 'icons-flex icon-al-start',
                  },{
                    value: 'flex-end',
                    title: 'End',
                    className: 'icons-flex icon-al-end',
                  },{
                    value: 'stretch',
                    title: 'Stretch',
                    className: 'icons-flex icon-al-str',
                  },{
                    value: 'center',
                    title: 'Center',
                    className: 'icons-flex icon-al-center',
                  }],
                },{
                  name: 'Flex Children',
                  property: 'label-parent-flex',
                  type: 'integer',
                },{
                  name: 'Order',
                  property: 'order',
                  type: 'integer',
                  defaults: 0,
                  min: 0
                },{
                  name: 'Flex',
                  property: 'flex',
                  type: 'composite',
                  properties  : [{
                    name: 'Grow',
                    property: 'flex-grow',
                    type: 'integer',
                    defaults: 0,
                    min: 0
                  },{
                    name: 'Shrink',
                    property: 'flex-shrink',
                    type: 'integer',
                    defaults: 0,
                    min: 0
                  },{
                    name: 'Basis',
                    property: 'flex-basis',
                    type: 'integer',
                    units: ['px','%',''],
                    unit: '',
                    defaults: 'auto',
                  }],
                },{
                  name: 'Align',
                  property: 'align-self',
                  type: 'radio',
                  defaults: 'auto',
                  list: [{
                    value: 'auto',
                    name: 'Auto',
                  },{
                    value: 'flex-start',
                    title: 'Start',
                    className: 'icons-flex icon-al-start',
                  },{
                    value   : 'flex-end',
                    title: 'End',
                    className: 'icons-flex icon-al-end',
                  },{
                    value   : 'stretch',
                    title: 'Stretch',
                    className: 'icons-flex icon-al-str',
                  },{
                    value   : 'center',
                    title: 'Center',
                    className: 'icons-flex icon-al-center',
                  }],
                }]
              }
            ],
        },
        plugins: [
          'gjs-blocks-basic',
          'grapesjs-plugin-forms',
          'grapesjs-component-countdown',
          'grapesjs-plugin-export',
          'grapesjs-tabs',
          'grapesjs-custom-code',
          'grapesjs-touch',
          'grapesjs-parser-postcss',
          'grapesjs-tooltip',
          'grapesjs-tui-image-editor',
          'grapesjs-typed',
          'grapesjs-style-bg',
          'grapesjs-preset-webpage',
        ],
        pluginsOpts: {
          'gjs-blocks-basic': { flexGrid: true },
          'grapesjs-tui-image-editor': {
            script: [
              // 'https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.6.7/fabric.min.js',
              'https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js',
              'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.js',
              'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.js'
            ],
            style: [
              'https://uicdn.toast.com/tui-color-picker/v2.2.7/tui-color-picker.min.css',
              'https://uicdn.toast.com/tui-image-editor/v3.15.2/tui-image-editor.min.css',
            ],
          },
          'grapesjs-tabs': {
            tabsBlock: { category: 'Extra' }
          },
          'grapesjs-typed': {
            block: {
              category: 'Extra',
              content: {
                type: 'typed',
                'type-speed': 40,
                strings: [
                  'Text row one',
                  'Text row two',
                  'Text row three',
                ],
              }
            }
          },
        },
      });

      editor.I18n.addMessages({
        en: {
          styleManager: {
            properties: {
              'background-repeat': 'Repeat',
              'background-position': 'Position',
              'background-attachment': 'Attachment',
              'background-size': 'Size',
            }
          },
        }
      });


   editor.Commands.add("open-assets", {
  run(editor, sender, opts) {
    const assettarget = opts.target;
    // code to open your own modal goes here.
   //openModal(assettarget)
   alert();
  }
});

      var pn = editor.Panels;
      var modal = editor.Modal;
      var cmdm = editor.Commands;

      // Update canvas-clear command
      cmdm.add('canvas-clear', function() {
        if(confirm('Are you sure to clean the canvas?')) {
          editor.runCommand('core:canvas-clear')
          setTimeout(function(){ localStorage.clear()}, 0)
        }
      });

      // Add info command
      var mdlClass = 'gjs-mdl-dialog-sm';
      var infoContainer = document.getElementById('info-panel');

      cmdm.add('open-info', function() {
        var mdlDialog = document.querySelector('.gjs-mdl-dialog');
        mdlDialog.className += ' ' + mdlClass;
        infoContainer.style.display = 'block';
        modal.setTitle('About this demo');
        modal.setContent(infoContainer);
        modal.open();
        modal.getModel().once('change:open', function() {
          mdlDialog.className = mdlDialog.className.replace(mdlClass, '');
        })
      });
 pn.addButton('options', {
        id: 'media-btn',
        className: 'fa fa-file-image-o',
        command: function() { 

           var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            console.log(image_url);
            // Let's assign the url value to the input field
            //$('#image_url').val(image_url);
        });

 },
        attributes: {
          'title': 'Media',
          'data-tooltip-pos': 'bottom',
        },
      });
      pn.addButton('options', {
        id: 'save-btn',
        className: 'fa fa-save',
        command: function() { var Html = editor.getHtml();
var Css = editor.getCss(); console.log(Html);


    // var fd = new FormData();
    // fd.append("html", Html);  
    // fd.append("css", Css);  
    // fd.append('action', 'htmlwp_editor_ajax');  
    // fd.append('nonce'  , '<?php echo wp_create_nonce( 'htmlwp_editor_ajax_action' ); ?>');
    jQuery.ajax({
        type: 'POST',
        url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
        data: {'action': 'htmlwp_editor_ajax','nonce' : '<?php echo wp_create_nonce( 'htmlwp_editor_ajax_action' ); ?>',"html" : Html,"css": Css,'post_id':'<?php echo $post_id; ?>'},
        beforeSend: function ( xhr ) {
               
            },
        success: function(response){

            console.log(response);
            
        }
    });

 },
        attributes: {
          'title': 'Save',
          'data-tooltip-pos': 'bottom',
        },
      });


      // Simple warn notifier
      var origWarn = console.warn;
      toastr.options = {
        closeButton: true,
        preventDuplicates: true,
        showDuration: 250,
        hideDuration: 150
      };
      console.warn = function (msg) {
        if (msg.indexOf('[undefined]') == -1) {
          toastr.warning(msg);
        }
        origWarn(msg);
      };


      


      // Store and load events
      editor.on('storage:load', function(e) { console.log('Loaded ', e) });
      editor.on('storage:store', function(e) { console.log('Stored ', e) });


      // Do stuff on load
      editor.on('load', function() {
        var $ = grapesjs.$;

        // Show borders by default
        pn.getButton('options', 'sw-visibility').set('active', 1);
      //   pn.getButton('options', 'sw-visibility').set('active', 1);

        // Show logo with the version
        var logoCont = document.querySelector('.gjs-logo-cont');
        document.querySelector('.gjs-logo-version').innerHTML = 'v' + grapesjs.version;
        var logoPanel = document.querySelector('.gjs-pn-commands');
        logoPanel.appendChild(logoCont);


        // Load and show settings and style manager
        // var openTmBtn = pn.getButton('views', 'open-tm');
        // openTmBtn && openTmBtn.set('active', 1);
        // var openSm = pn.getButton('views', 'open-sm');
        // openSm && openSm.set('active', 1);
var codeButton = editor.Panels.getButton("options", "export-template");
	codeButton.collection.remove(codeButton);

	var importButton = editor.Panels.getButton("options", "gjs-open-import-webpage");
	importButton.collection.remove(importButton);

	var clearButton = editor.Panels.getButton("options", "canvas-clear");
	clearButton.collection.remove(clearButton);

        // Add Settings Sector
        var traitsSector = $('<div class="gjs-sm-sector no-select">'+
          '<div class="gjs-sm-sector-title"><span class="icon-settings fa fa-cog"></span> <span class="gjs-sm-sector-label">Settings</span></div>' +
          '<div class="gjs-sm-properties" style="display: none;"></div></div>');
        var traitsProps = traitsSector.find('.gjs-sm-properties');
        traitsProps.append($('.gjs-trt-traits'));
        $('.gjs-sm-sectors').before(traitsSector);
        traitsSector.find('.gjs-sm-sector-title').on('click', function(){
          var traitStyle = traitsProps.get(0).style;
          var hidden = traitStyle.display == 'none';
          if (hidden) {
            traitStyle.display = 'block';
          } else {
            traitStyle.display = 'none';
          }
        });

        // Open block manager
        var openBlocksBtn = editor.Panels.getButton('views', 'open-blocks');
        openBlocksBtn && openBlocksBtn.set('active', 1);

        // Move Ad
        $('#gjs').append($('.ad-cont'));
      });

      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-74284223-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
