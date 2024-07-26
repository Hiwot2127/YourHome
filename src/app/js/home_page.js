'use strict'

import { propertyList } from "../data/property.js"

const propertyListComponent=(imageUrl,name,rootName)=>{

const cardContainer=document.createElement('div')
const list=document.createElement('div')
const divider=document.createElement('div')
const dividerBottom=document.createElement('div')
const propertyBottom=document.createElement('div')
const image=document.createElement('img')
const typography=document.createElement('p')
const propertyDetail=document.createElement('a')
const price=document.createElement('span')

const cub=document.createElement('i')
const bed=document.createElement('i')
const cubText=document.createElement('p')
const bedText=document.createElement('p')

    
propertyBottom.classList.add('card-meta')

price.innerText=`Price\n 5000 ETB`
price.style.lineHeight='30px'

const ratingStarList = document.createElement('span');
    const ratingTitle = document.createElement('span');
    const ratingStars = [];

    // Set the text content for rating title
    ratingTitle.innerText = `Rate`;

    // Create 5 stars and add them to the array
    for (let i = 0; i < 5; i++) {
        const ratingStar = document.createElement('i');
        ratingStar.className = 'fa fa-star';

        // Initially set the star color to white
        ratingStar.style.color = 'white';

        // Add click event listener to toggle star color
        ratingStar.addEventListener('click', function() {
            // Toggle star color between white and orange
            if (ratingStar.style.color === 'white') {
                ratingStar.style.color = 'orange';
            } else {
                ratingStar.style.color = 'white';
            }
        });

        // Add the star to the stars array
        ratingStars.push(ratingStar);
    }

    // Append ratingTitle and ratingStars to ratingStarList
    ratingStarList.appendChild(ratingTitle);
    ratingStars.forEach(star => ratingStarList.appendChild(star));


cub.className='fa fa-cube'
bed.className='fa fa-bed'
list.classList.add('property-info')
cubText.innerText='800ftx200ft'
bedText.innerText='Bed'
list.appendChild(cub)
list.appendChild(cubText)
list.appendChild(bed)
list.appendChild(bedText)
divider.classList.add('divider')
dividerBottom.classList.add('divider')
cardContainer.classList.add('property-card-container')
image.src=imageUrl
image.classList.add('property-image')
typography.innerText=name
typography.classList.add('property-name')
propertyDetail.innerText='Property Detail'
propertyDetail.classList.add('property-detail')
propertyDetail.href='.src/app/pages/property_details.php'

propertyBottom.appendChild(price)
propertyBottom.appendChild(ratingStarList)

cardContainer.appendChild(image)
cardContainer.appendChild(typography)
cardContainer.appendChild(propertyDetail)
cardContainer.appendChild(divider)
cardContainer.appendChild(list)
cardContainer.appendChild(dividerBottom)
cardContainer.appendChild(propertyBottom)

document.getElementById(rootName).appendChild(cardContainer)

}

propertyList.splice(0,3)?.map((data,index)=>{
    propertyListComponent(data.propertyImage,data.propertyName,'property-lists')
    
})