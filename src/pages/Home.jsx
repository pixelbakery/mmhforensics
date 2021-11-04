import React, {useEffect, Component} from 'react'
import {appendScript} from '../js/appendBloom'
import {removeScript} from '../js/removeBloom'
import { UnrealBloomPass } from '//unpkg.com/three@0.123.0/examples/jsm/postprocessing/UnrealBloomPass.js';
import Modal from '../components/modal';
function generateLinks(nodes) {
    let links = [];
    nodes.forEach(node => {
        let numNodeLinks = Math.round(Math.random() * (0.75 + Math.random())) + 1;
        for(let i = 0; i < numNodeLinks; i++) {
            links.push({
                source: node.id,
                target: Math.round(Math.random() * (node.id > 0 ? node.id - 1 : node.id))
            });
        }
    });
    return links;
}


function RenderTheStuff(){
const deg2rad = deg => { return deg * Math.PI / 180; }
const rad2deg = rad => { return rad * 180 / Math.PI; }

const initialData = { nodes: [{ id: 0 }], links: [] };

const N = 500;
const nodes = [...Array(N).keys()].map(i => {
    return {
        id: i,
        val: (Math.random() * 1.5) + 1
    };
});


const links = generateLinks(nodes);
const gData = {nodes, links};

const distance = 1500;

const graphElem = document.getElementById("3d-graph");

const Graph = ForceGraph3D()(graphElem);
Graph.enableNodeDrag(false);
Graph.enableNavigationControls(false);
Graph.enablePointerInteraction(false);
Graph.showNavInfo(false);

Graph.cameraPosition({ z: distance, x: distance });

Graph.nodeRelSize(4);
Graph.nodeOpacity(.8);

Graph.linkWidth(5);

Graph.linkDirectionalParticles(5);
Graph.linkDirectionalParticleWidth(5);

const bloomPass = new UnrealBloomPass();
bloomPass.strength = 3;
bloomPass.radius = 1;
bloomPass.threshold = 0.5;
Graph.postProcessingComposer().addPass(bloomPass);

Graph.graphData(gData);

let currentAngle = 0;
setInterval(() => {
    Graph.cameraPosition({
        x: distance * Math.sin(deg2rad(currentAngle)),
        z: distance * Math.cos(deg2rad(currentAngle))
    });

    currentAngle += 0.5;
}, 10);

window.addEventListener('resize', e => {
    let width = window.innerWidth;
    let height = window.innerHeight;

    Graph.width(width);
    Graph.height(height);
    Graph.refresh();
});

}

class Home extends Component {
    
    constructor(props) {
        super(props);
        this.state = {
          count: 0
        };
      }

      componentDidMount() {
        RenderTheStuff();
        console.log("mounted");
        
      }
      componentDidUpdate() {
          console.log("updated");
          RenderTheStuff();
        
        
      }
      componentWillUnmount(){
        console.log("unmounted");
       
      }

    render(){




      
        return(
  <div className="container vh-100 my-0  " >
      
    <div className="graph-holder position-relative">
      <div  className="graph">
        <div id="3d-graph"></div>
      </div>
    </div>

    <div className="skrim d-block d-md-none"></div>
    <main className="container">
      <div className="row h-100  d-flex flex-column justify-content-around mx-1 px-1 px-md-5">
          <div className="title-holder d-inline-block pt-1">
              <h1 className=""><span>The Centre for</span></h1>
              <h1 className="display-1"><span>Perinatal</span></h1>
              <h1 className="display-1"><span>Psychology</span></h1>

              <h1><span>and</span></h1>
              <h1 className="display-1"><span>Forensics</span></h1>
                  <h1 className="display-1"><span className="underline">International</span></h1>
          </div>

          <div className="py-1">

            
            <p className="lead text "><a data-toggle="modal" data-target="#exampleModal">Enter your email</a> for updates and news.</p>
          </div>
      </div>
            <div id="yourAppElement"></div>
   
        <div className="modal fade" id="exampleModal" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div className="modal-dialog modal-dialog-centered">
            <div className="modal-content">
              <div className="modal-header">
                  <h5 className="modal-title" id="exampleModalLabel">Enter Your Email</h5>
                <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div className="modal-body">
            
                <div id="mc_embed_signup">
       

                </div>
                {/* <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
       */}
              </div>
            </div>
          </div>
        </div>
        
    </main>
  
  </div>
        );

    }
}
export default Home