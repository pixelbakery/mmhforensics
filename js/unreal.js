/* eslint space-in-parens: "off", no-unused-vars: "off", no-undef: "off", curly: "error" */

import {
	UnrealBloomPass,
} from '//unpkg.com/three@0.123.0/examples/jsm/postprocessing/UnrealBloomPass.js';

const deg2rad = ( deg ) => {
	return deg * Math.PI / 180;
};
const rad2deg = (rad) => {
	return rad * 180 / Math.PI;
};

const initialData = {
	nodes: [ {
		id: 0,
	} ],
	links: [],
};

const N = 500;
const nodes = [ ...Array(N).keys() ].map((i) => {
	return {
		id: i,
		val: (Math.random() * 1.5) + 1,
	};
});

function generateLinks(thesenodes) {
	const links = [];
	thesenodes.forEach((node) => {
		const numNodeLinks = Math.round(Math.random() * (0.75 + Math.random())) + 1;
		for (let i = 0; i < numNodeLinks; i++) {
			links.push({
				source: node.id,
				target: Math.round(Math.random() * (node.id > 0 ? node.id - 1 : node.id)),
			});
		}
	});
	return links;
}
const links = generateLinks(nodes);
const gData = {
	nodes,
	links,
};

const distance = 1500;

const graphElem = document.getElementById('3d-graph');

const Graph = ForceGraph3D()(graphElem);
Graph.enableNodeDrag(false);
Graph.enableNavigationControls(false);
Graph.enablePointerInteraction(false);
Graph.showNavInfo(false);

Graph.cameraPosition({
	z: distance,
	x: distance,
});

Graph.nodeRelSize(4);
Graph.nodeOpacity(0.8);

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
		z: distance * Math.cos(deg2rad(currentAngle)),
	});

	currentAngle += 0.5;
}, 10);

window.addEventListener('resize', (e) => {
	const width = window.innerWidth;
	const height = window.innerHeight;

	Graph.width(width);
	Graph.height(height);
	Graph.refresh();
});
