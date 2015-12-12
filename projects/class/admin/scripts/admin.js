//Load functions that do things when page is loaded I suppose
function loadUsers() {
    if (typeof localStorage.user === 'undefined') localStorage.user = '{"keys":[1,2,3,4,5,6,7,8,9,10,11], \
    "slkdfj@dfjhdjd.sdkjf":{"fname":"asdj","lname":"sdjkfh","uname":"sldkfjd","pass":"ahah123#","key":1}, \
    "bran.ramirez.don@gmail.com":{"fname":"Brandon","lname":"Ramirez","uname":"ToEndThePeace","pass":"T0rtilla$","key":2}, \
    "haha@haha.haha":{"fname":"haha","lname":"haha","uname":"hahaha","pass":"haha123#","key":3}, \
    "sahsd@sahsd.com":{"fname":"sahsd","lname":"sahsd","uname":"sahsds","pass":"sahsd123#","key":4}, \
    "luigi@luigi.com":{"fname":"luigi","lname":"luigis","uname":"luigissimo","pass":"luigissimo123#","key":5}, \
    "askjdh@did8337.csdom":{"fname":"alie","lname":"asloe","uname":"oieur83","pass":"1212##w","key":6}, \
    "bobo123@bobo.com":{"fname":"aslk","lname":"papa","uname":"poewasd","pass":"bo#a1","key":7}, \
    "poiewrw@asi.askdj":{"fname":"SHas","lname":"sldkfj","uname":"oaoaoa","pass":"AOAO123#","key":8}, \
    "asd@asd.asd":{"fname":"asd","lname":"asd","uname":"asdasd","pass":"asd123#","key":9}, \
    "dsa@dsa.dsa":{"fname":"dsa","lname":"dsa","uname":"dsadsa","pass":"dsa321#","key":10}, \
    "toto@toto.toto":{"fname":"boooo","lname":"booo","uname":"bododod","pass":"totot123#","key":11}}';
    var z = localStorage.user;
    window.usr = JSON.parse(z);
}
function logOut() {
	sessionStorage.clear();
	window.location.assign("../index.php");
}