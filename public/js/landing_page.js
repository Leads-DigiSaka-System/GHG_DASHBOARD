'use strict'

function toPolygonObj(polygon) {
    let coordsList = [];

    // Check if polygon is not null or undefined
    if (polygon && polygon.latLngs) {
        let polCoords = polygon.latLngs;
        for (let i = 0; i < polCoords.length; i++) {
            let polObj = {};
            polObj.lat = polCoords[i][0];
            polObj.lng = polCoords[i][1];
            coordsList.push(polObj);
        }
    } else {
        console.error("Invalid or missing polygon object.");
    }

    return coordsList;
}

function formatNumber(number) {
            return number.toLocaleString(undefined, {
                maximumFractionDigits: 2
            });
        }

async function initMap() {
    //const base_url = window.location.origin
    const base_url = "https://digisaka.info"
    const map = new google.maps.Map(document.getElementById('farm_image'), {
        center: {
            lat: 12.8797,
            lng: 121.7740,
        },
        zoom: 6,
    });


    const response = await fetch('farms/allFarms')

    if(!response.ok) {
        throw new Error('Error fetching farms')
    }

    const allFarms = await response.json()

    // Variable to keep track of the currently open infoWindow
    let currentInfoWindow

    let myVar = []
    let polygon = []
    let poly = []
    let marker = []
    let infoWindow = []
    for (const [key, value] of allFarms.entries()) {
        let farmerDetails = value.farmer_details
        farmerDetails.full_name = farmerDetails.full_name.toUpperCase()

        polygon[key] = JSON.parse(value.area_location.replace("&quot;latLngs&quot;","\"latLngs\""))
        
        let coords = toPolygonObj(polygon[key])

        let polygonArea = google.maps.geometry.spherical.computeArea(coords);
        let maxAllowedArea = 1000000; // 1,000,000 square meters
        let polygonAreaHa = polygonArea / 10000; // Convert square meters to hectares

        if(polygonArea <= maxAllowedArea) {
            poly[key] = new google.maps.Polygon({
                paths: coords,
                strokeColor: "#FF0000",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#FF0000",
                fillOpacity: 0.35,
            });

            // Set the polygon on the map
            poly[key].setMap(map);

            // Create a marker for the farm
            marker[key] = new google.maps.Marker({
                position: coords[0], // Use the first coordinate as the marker position
                map: map,
                title: `Farm ID: ${ value.farm_id }`,
            });

            let images =  value.farm_image.split(",")

            for(let i = 0; i <images.length; i++) {
                const image = images[i]

                myVar[key] =`<a href="${base_url}/${image}" target="_blank"><img src="${base_url}/${image}" alt="Farm Image" width="150px" style="padding: 5px;"></a>`;
                
                
            }

            infoWindow[key] = new google.maps.InfoWindow({
                content: `
                    <table>
                        <tr>
                            <td>Farm ID:</td><td>${value.farm_id}</td>
                        </tr>
                        <tr>
                            <td>Area:</td><td>${formatNumber(polygonAreaHa)} ha</td>
                        </tr>
                        <tr>
                            <td>Farmer:</td><td>${farmerDetails.full_name}</td>
                        </tr>
                        <tr>
                            <td>Date created:</td>
                            <td>${farmerDetails.created_at.substring(0,10)}</td>
                        </tr>
                    </table>
                    <hr />
                    <div class="map_image"> ${myVar[key]}</div>`,
                maxWidth: 1200,
                minHeight: 150,
            });

            // Add click event listener to the marker
            marker[key].addListener('click', function() {
                // Close the currently open infoWindow, if any
                if (currentInfoWindow) {
                    currentInfoWindow.close();
                }

                // Open the infoWindow for the clicked marker
                infoWindow[key].open(map, marker[key]);

                // Update the currentInfoWindow variable
                currentInfoWindow = infoWindow[key];
            });

        }
    }

}

initMap()