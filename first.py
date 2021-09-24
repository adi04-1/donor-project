import cherrypy
import os.path
import struct
from jinja2 import Template

class Server(object):
    led_switch=1 
    def index(self,  switch=''):
        myText = ''
        if switch:
            self.led_switch = int(switch)             
            myText = "Please Wait"
        html = Template("""
                <html>
                <body onload='setTimeout(function(){document.getElementById("UserMessage").innerHTML = "Ok! it's done"}, 5000)'>
                <br>
                <p id="UserMessage">{{ htmlText }}<p>
                <a href="?switch=1"><img src="images/on.png"></a>
                </body>
                </html>
                """)

        return html.render(htmlText=myText)
    index.exposed = True

    conf = {
        'global' : { 
            'server.socket_host': '0.0.0.0', #0.0.0.0 or specific IP
            'server.socket_port': 8080 #server port
        },

        '/images': { #images served as static files
            'tools.staticdir.on': True,
            'tools.staticdir.dir': os.path.abspath('images')
        },

        '/favicon.ico': {  #favorite icon
            'tools.staticfile.on': True,  
            'tools.staticfile.filename': os.path.abspath("images/bulb.ico")
        }
    }
cherrypy.quickstart(Server(), config=conf)