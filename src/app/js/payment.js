'use strict';

const payment=document.getElementById('payment-modal')
const signUp=document.getElementById('btn')
const closeIcon=document.getElementById('close-icon')

signUp.addEventListener('click',()=>{
	alert('Please pay the listing fee')
payment.style.display='flex'
})

closeIcon.addEventListener('click',()=>{
payment.style.display='none'
})

export const paymentContainer=document.getElementById('payment-container')



