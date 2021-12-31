
<p align="center"><a href="https://editor.truncgil.com" target="_blank"><img src="https://editor.truncgil.com/logo.svg" width="400"></a></p>

<p align="center">
<a href="https://editor.truncgil.com">Online Demo</a>

</p>

## About Imageditor

Open source online image editing application

## Get Started
Javascript Code Block in ```<head> ``` tags
```javascript
var truncgil = new Truncgil({
			// ENTER CONFIGURATION HERE
			// ENTER CONFIGURATION HERE
		//	image : "logo2.svg",
			crossOrigin: true,
			baseUrl: 'https://editor.truncgil.com',
			
			ui: {
				defaultTheme: dark_mode,
				
				openImageDialog: {
            		show: false
				},
				allowEditorClose: true
			},
			tools : {
				export: {
					defaultFormat: 'png',
					defaultQuality: 0.8,
					defaultName: 'Trunçgil Editor',
				},
				stickers: {
				replaceDefault: false,
				items: <?php echo $stickers ?>
			}
			},
			onLoad: function () {
				window.postMessage('truncgilLoaded', '*');
				
					truncgil.loadState(state).then(function() {
						console.log("State is loaded");
					});
					onLoad();
				
			},
		});
 ```
 
 HTML code block in ```<body>``` tags
 
 ```html
 <truncgil-editor>
 </truncgil-editor>
 <script src="scripts.min.js?v35"></script>
 ```
 
