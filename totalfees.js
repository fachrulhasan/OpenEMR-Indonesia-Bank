function findTotal(){
    var roomcharges = document.getElementById('roomcharges').value;
    var doctorfees = document.getElementById('doctorfees').value;
    var therapyfees = document.getElementById('therapyfees').value;
    var result = parseInt(roomcharges) + parseInt(doctorfees) + parseInt(therapyfees);
    
    if (!isNaN(result)) {
         document.getElementById('totalfees').value = result;
      }
    
}