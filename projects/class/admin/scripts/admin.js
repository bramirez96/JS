//Load functions that do things when page is loaded I suppose
function loadUsers() {
    if (typeof localStorage.user === 'undefined') {
        localStorage.user = '{"slkdfj@dfjhdjd.sdkjf":{"fname":"asdj","lname":"sdjkfh","uname":"sldkfjd","pass":"ahah123#"},\
            "bran.ramirez.don@gmail.com":{"fname":"Brandon","lname":"Ramirez","uname":"ToEndThePeace","pass":"T0rtilla$"},\
            "haha@haha.haha":{"fname":"haha","lname":"haha","uname":"hahaha","pass":"haha123#"},\
            "sahsd@sahsd.com":{"fname":"sahsd","lname":"sahsd","uname":"sahsds","pass":"sahsd123#"},\
            "luigi@luigi.com":{"fname":"luigi","lname":"luigis","uname":"luigissimo","pass":"luigissimo123#"},\
            "askjdh@did8337.csdom":{"fname":"alie","lname":"asloe","uname":"oieur83","pass":"1212##w"},\
            "bobo123@bobo.com":{"fname":"aslk","lname":"papa","uname":"poewasd","pass":"bo#a1"},\
            "poiewrw@asi.askdj":{"fname":"SHas","lname":"sldkfj","uname":"oaoaoa","pass":"AOAO123#"},\
            "asd@asd.asd":{"fname":"asd","lname":"asd","uname":"asdasd","pass":"asd123#"},\
            "dsa@dsa.dsa":{"fname":"dsa","lname":"dsa","uname":"dsadsa","pass":"dsa321#"},\
            "toto@toto.toto":{"fname":"boooo","lname":"booo","uname":"bododod","pass":"totot123#"}}';
    }
    window.usr = JSON.parse(localStorage.user);
}
function loadItems(sort) {
    if (typeof localStorage.item === 'undefined') {
        localStorage.item = '{"0399501487":{"title":"Lord of the Flies","author":"William Golding","genre":"Psychological Thriller"},\
            "0060850523":{"title":"Brave New World","author":"Aldous Huxley","genre":"Science Fiction"},\
            "0451524934":{"title":"1984","author":"George Orwell","genre":"Science Fiction"},\
            "0446310786":{"title":"To Kill a Mockingbird","author":"Harper Lee","genre":"Classics"},\
            "0140177396":{"title":"Of Mice and Men","author":"John Steinbeck","genre":"Classics"},\
            "0671042858":{"title":"The Girl Who Loved Tom Gordon","author":"Stephen King","genre":"Psychological Thriller"},\
            "0143034901":{"title":"The Shadow of the Wind","author":"Carlos Ruiz Zafón","genre":"Suspense"},\
            "0439023521":{"title":"The Hunger Games","author":"Suzanne Collins","genre":"Suspense"},\
            "0440418321":{"title":"The Golden Compass","author":"Phillip Pullman","genre":"Fantasy"},\
            "0060005424":{"title":"Lirael: Daughter of the Clayr","author":"Garth Nix","genre":"Fantasy"},\
            "0590353403":{"title":"Harry Potter and the Sorceror\'s Stone","author":"J. K. Rowling","genre":"Fantasy"},\
            "0307474275":{"title":"The Da Vinci Code","author":"Dan Brown","genre":"Mystery"},\
            "0380729407":{"title":"Something Wicked This Way Comes","author":"Ray Bradbury","genre":"Mystery"},\
            "0486411095":{"title":"Dracula","author":"Bram Stoker","genre":"Classics"},\
            "0486264785":{"title":"The Importance of Being Earnest","author":"Oscar Wilde","genre":"Comedy"},\
            "0440180295":{"title":"Slaughterhouse-Five","author":"Kurt Vonnegut","genre":"Classics"},\
            "0679720200":{"title":"The Stranger","author":"Albert Camus","genre":"Classics"},\
            "0316056898":{"title":"Bossypants","author":"Tina Fey","genre":"Comedy"},\
            "0374530718":{"title":"Sophie\'s World","author":"Jostein Gaarder","genre":"Philosophy"},\
            "0738704431":{"title":"White is for Magic","author":"Laurie Faria Stolarz","genre":"Fantasy"},\
            "0375826696":{"title":"Eragon","author":"Christopher Paolini","genre":"Fantasy"}}';
    }
    window.itm = JSON.parse(localStorage.item);
}
function sortItems(sort) {
    z = {};
    for (x in itm) {
        z[itm[x][sort]] = {"isbn":x}; 
        for (q in itm[x]) if (q != sort) z[itm[x][sort]][q] = itm[x][q];
    }
}
function logOut() {
	sessionStorage.clear();
	window.location.assign("../index.php");
}