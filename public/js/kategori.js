var sortLowToHighBtn = document.getElementById('sortLowToHighBtn');
var sortHighToLowBtn = document.getElementById('sortHighToLowBtn');
var filterWebinarBtn = document.getElementById('filterWebinarBtn');
var filterMentorshipBtn = document.getElementById('filterMentorshipBtn');
var filterAllBtn = document.getElementById('filterAllBtn');
var cardContainer = document.getElementById('cardContainer');
var cards = Array.from(cardContainer.getElementsByClassName('card3'));
var activeFilter = 'all'; // Variable to track the active filter

sortLowToHighBtn.addEventListener('click', function() {
if (activeFilter !== 'all') {
    // Unapply filter
    cards.forEach(function (card) {
        card.style.display = 'block';
    });
activeFilter = 'all';
}

cards.sort(function(a, b) {
var priceA = parseFloat(a.dataset.price);
var priceB = parseFloat(b.dataset.price);
return priceA - priceB;
});

rearrangeCards();

// Toggle button classes
this.classList.toggle('active');
sortHighToLowBtn.classList.remove('active');
});

sortHighToLowBtn.addEventListener('click', function() {
if (activeFilter !== 'all') {
    // Unapply filter
    cards.forEach(function (card) {
        card.style.display = 'block';
    });
activeFilter = 'all';
}

cards.sort(function(a, b) {
var priceA = parseFloat(a.dataset.price);
var priceB = parseFloat(b.dataset.price);
return priceB - priceA;
});

rearrangeCards();

// Toggle button classes
this.classList.toggle('active');
sortLowToHighBtn.classList.remove('active');
});

filterWebinarBtn.addEventListener('click', function() {
if (activeFilter !== 'webinar') {
    // Apply filter
    cards.forEach(function (card) {
        var cardClass = card.dataset.class;
        if (cardClass === 'webinar') {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
activeFilter = 'webinar';
} else {
    // Unapply filter
    cards.forEach(function (card) {
        card.style.display = 'block';
    });
activeFilter = 'all';
}

rearrangeCards();

// Toggle button classes
this.classList.toggle('active');
filterMentorshipBtn.classList.remove('active');
filterAllBtn.classList.remove('active');
});

filterMentorshipBtn.addEventListener('click', function() {
if (activeFilter !== 'mentorship') {
    // Apply filter
    cards.forEach(function (card) {
        var cardClass = card.dataset.class;
        if (cardClass === 'mentorship') {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
activeFilter = 'mentorship';
} else {
    // Unapply filter
    cards.forEach(function (card) {
        card.style.display = 'block';
    });
activeFilter = 'all';
}

rearrangeCards();

// Toggle button classes
this.classList.toggle('active');
filterWebinarBtn.classList.remove('active');
filterAllBtn.classList.remove('active');
});

filterAllBtn.addEventListener('click', function() {
if (activeFilter !== 'all') {
    // Unapply filter
    cards.forEach(function (card) {
        card.style.display = 'block';
    });
activeFilter = 'all';
}

rearrangeCards();

// Toggle button classes
this.classList.toggle('active');
filterWebinarBtn.classList.remove('active');
filterMentorshipBtn.classList.remove('active');
});

function rearrangeCards() {
    cardContainer.innerHTML = '';
var rowNum = Math.ceil(cards.length / 2);
var filteredCards = cards.filter(function(card) {
return card.style.display !== 'none';
});

for (var i = 0; i < rowNum; i++) {
var rowDiv = document.createElement('div');
rowDiv.classList.add('row');

for (var j = i * 2; j < i * 2 + 2 && j < filteredCards.length; j++) {
    var colDiv = document.createElement('div');
colDiv.classList.add('col-6');

var card = filteredCards[j];

// Apply styles to the card
card.style.margin = '10px';
card.style.float = 'none';
card.style.position = 'relative';
card.style.transform = 'none';
card.style.top = '0';
card.style.left = '0';

colDiv.appendChild(card.parentElement); // Append the parent element instead of the card itself
rowDiv.appendChild(colDiv);
}

cardContainer.appendChild(rowDiv);
}
}

// Toggle button classes on hover
sortLowToHighBtn.addEventListener('mouseenter', function() {
if (!this.classList.contains('active')) {
    this.classList.add('button-blue');
}
});

sortLowToHighBtn.addEventListener('mouseleave', function() {
if (!this.classList.contains('active')) {
    this.classList.remove('button-blue');
}
});

sortHighToLowBtn.addEventListener('mouseenter', function() {
if (!this.classList.contains('active')) {
    this.classList.add('button-blue');
}
});

sortHighToLowBtn.addEventListener('mouseleave', function() {
if (!this.classList.contains('active')) {
    this.classList.remove('button-blue');
}
});

filterWebinarBtn.addEventListener('mouseenter', function() {
if (!this.classList.contains('active')) {
    this.classList.add('button-blue');
}
});

filterWebinarBtn.addEventListener('mouseleave', function() {
if (!this.classList.contains('active')) {
    this.classList.remove('button-blue');
}
});

filterMentorshipBtn.addEventListener('mouseenter', function() {
if (!this.classList.contains('active')) {
    this.classList.add('button-blue');
}
});

filterMentorshipBtn.addEventListener('mouseleave', function() {
if (!this.classList.contains('active')) {
    this.classList.remove('button-blue');
}
});

filterAllBtn.addEventListener('mouseenter', function() {
if (!this.classList.contains('active')) {
    this.classList.add('button-blue');
}
});

filterAllBtn.addEventListener('mouseleave', function() {
if (!this.classList.contains('active')) {
    this.classList.remove('button-blue');
}
});
