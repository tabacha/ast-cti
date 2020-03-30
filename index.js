var conacts={};
var internal_phone="202";
$.getJSON( "data.php?password="+password , function( data ) {
    contacts= data;
});

$navLinks=$('a.nav-link');

$navLinks.click(function(e) {
    console.log(e);
    e.preventDefault();
    internal_phone=$(e.target).attr('tel');
    $navLinks.parent().removeClass('active');
    $(e.target).parent().addClass('active');
});

function showTelephoneNumbers(data) {
    var out=[]
    for (let [key, value] of Object.entries(data)) {
        out.push($('<a>', { href:"call.php?num="+encodeURIComponent(value)+'&internal='+internal_phone+'&password='+password
            }).text(`${key}: ${value}`));
    }
    return out;
};

function matchInField(contact, fieldname, searchStr) {
    return ((contact[fieldname] != undefined) && (contact[fieldname].toLowerCase().startsWith(searchStr)));
};

function matchContact(searchStr, contact) {
    return (matchInField(contact, 'firstname', searchStr) || matchInField(contact, 'lastname', searchStr) || matchInField(contact, 'organization', searchStr));
};

$search=$('input[name="search"]');
$search.keyup(function(e) {
    searchStr=$search.val().toLowerCase();
    console.log(searchStr);

    $('#telBody').empty();

    contacts.forEach(function(contact) {
        if ((contact['phone'] != undefined)) {
            if (matchContact(searchStr, contact))
            {
                console.log(contact);
                $('#telBody').append(
                    $('<tr>').append(
                        $('<td>').text(contact['firstname']),
                        $('<td>').text(contact['lastname']),
                        $('<td>').text(contact['organization']),
                        $('<td>').append(showTelephoneNumbers(contact['phone']))
                    )
                );
            }
        }
    });
});
