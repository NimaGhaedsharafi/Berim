function Map(id,center,zoom,EventSelect){
	
	var that = this ;
	this._alowSelect = true ;
	var X=null,Y=null ;
	EventSelect = typeof(EventSelect) != "undefined" ? EventSelect : function(e){} ;
	this.Select = function(POS){
		this._alowSelect = false;
		L.marker([POS.X,POS.Y]).addTo(map);
	};
	
	
	MB_ATTR = 'Berim Map';

	MB_URL = 'https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png';

	OSM_URL = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
	OSM_ATTRIB = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors';
	
	
	// create a map in the "map" div, set the view to a given place and zoom
	var map = L.map(id,{
		center: center,
		zoom: zoom 
	});//.setView([51.505, -0.09], 13);
	 
	// add an OpenStreetMap tile layer
	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="http://osm.org/copyright">Berim</a> contributors'
	}).addTo(map);
	
	// add a marker in the given location, attach some popup content to it and open the popup
	//L.marker([51.5, -0.09]).addTo(map);
	var mark=null;	
	
	function onMapClick(e) {
		
		if(!that._alowSelect)
			return ;
		
		$(".leaflet-marker-icon").remove();
		$(".leaflet-shadow-pane").remove();
		
		mark = L.marker(e.latlng).addTo(map);
		
		X = e.latlng.lat;
		Y = e.latlng.lng;
		
		EventSelect({X:X,Y:Y});
		
	}
	L.tileLayer(MB_URL, {attribution: MB_ATTR, id: 'examples.map-20v6611k'}).addTo(map);
	map.on('click', onMapClick);
			
	
	this.getSelectedPoint = function(){
			
		return {X:X,Y:Y};
	}
	
}