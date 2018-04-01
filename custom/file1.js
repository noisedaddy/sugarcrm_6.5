//test function
function firstr(myVar){
    if (typeof myVar === 'string' || myVar instanceof String)
        return myVar.length; //console.log('In firstr');
    else return 0;
}
