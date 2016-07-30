
/*
Tipue Search 5.0
Copyright (c) 2015 Tipue
Tipue Search is released under the MIT License
http://www.tipue.com/search
*/


/*
Stop words
Stop words list from http://www.ranks.nl/stopwords
*/

var tipuesearch_stop_words = ["a", "about", "above", "after", "again", "against", "all", "am", "an", "and", "any", "are", "aren't", "as", "at", "be", "because", "been", "before", "being", "below", "between", "both", "but", "by", "can't", "cannot", "could", "couldn't", "did", "didn't", "do", "does", "doesn't", "doing", "don't", "down", "during", "each", "few", "for", "from", "further", "had", "hadn't", "has", "hasn't", "have", "haven't", "having", "he", "he'd", "he'll", "he's", "her", "here", "here's", "hers", "herself", "him", "himself", "his", "how", "how's", "i", "i'd", "i'll", "i'm", "i've", "if", "in", "into", "is", "isn't", "it", "it's", "its", "itself", "let's", "me", "more", "most", "mustn't", "my", "myself", "no", "nor", "not", "of", "off", "on", "once", "only", "or", "other", "ought", "our", "ours", "ourselves", "out", "over", "own", "same", "shan't", "she", "she'd", "she'll", "she's", "should", "shouldn't", "so", "some", "such", "than", "that", "that's", "the", "their", "theirs", "them", "themselves", "then", "there", "there's", "these", "they", "they'd", "they'll", "they're", "they've", "this", "those", "through", "to", "too", "under", "until", "up", "very", "was", "wasn't", "we", "we'd", "we'll", "we're", "we've", "were", "weren't", "what", "what's", "when", "when's", "where", "where's", "which", "while", "who", "who's", "whom", "why", "why's", "with", "won't", "would", "wouldn't", "you", "you'd", "you'll", "you're", "you've", "your", "yours", "yourself", "yourselves"];


// Word replace

var tipuesearch_replace = {'words': [
     {'word': 'tipua', 'replace_with': 'tipue'},
     {'word': 'javscript', 'replace_with': 'javascript'},
     {'word': 'jqeury', 'replace_with': 'jquery'}
]};


// Weighting

var tipuesearch_weight = {'weight': [
     {'url': 'http://www.tipue.com', 'score': 200},
     {'url': 'http://www.tipue.com/search', 'score': 100},
     {'url': 'http://www.tipue.com/about', 'score': 100}
]};


// Stemming

var tipuesearch_stem = {'words': [
     {'word': 'e-mail', 'stem': 'email'},
     {'word': 'javascript', 'stem': 'jquery'},
     {'word': 'javascript', 'stem': 'js'}
]};


// Internal strings

var tipuesearch_string_1 = 'No title';
var tipuesearch_string_2 = 'Showing results for';
var tipuesearch_string_3 = 'Search instead for';
var tipuesearch_string_4 = '1 result';
var tipuesearch_string_5 = 'results';
var tipuesearch_string_6 = 'Prev';
var tipuesearch_string_7 = 'Next';
var tipuesearch_string_8 = 'Nothing found';
var tipuesearch_string_9 = 'Common words are largely ignored';
var tipuesearch_string_10 = 'Search too short';
var tipuesearch_string_11 = 'Should be one character or more';
var tipuesearch_string_12 = 'Should be';
var tipuesearch_string_13 = 'characters or more';


// Search Pages

var tipuesearch_pages = ["http://biostat.jabsom.hawaii.edu/", "http://biostat.jabsom.hawaii.edu/Home/about.html", "http://biostat.jabsom.hawaii.edu/Home/expertise.html", "http://biostat.jabsom.hawaii.edu/Home/researchdesign.html", "http://biostat.jabsom.hawaii.edu/Home/biostatanalysis.html", "http://biostat.jabsom.hawaii.edu/Home/bioinfoanalysis.html", "http://biostat.jabsom.hawaii.edu/Home/biomedinfo.html", "http://biostat.jabsom.hawaii.edu/Home/resultsdissem.html", "http://biostat.jabsom.hawaii.edu/Home/traininged.html", "http://biostat.jabsom.hawaii.edu/Home/members.html", "http://biostat.jabsom.hawaii.edu/Home/Faculty/ahn-hyeongjun.html", "http://biostat.jabsom.hawaii.edu/Home/Faculty/chen-john.html", "http://biostat.jabsom.hawaii.edu/Home/Faculty/davis-james.html", "http://biostat.jabsom.hawaii.edu/Home/Faculty/lim-eunjung.html", "http://biostat.jabsom.hawaii.edu/Home/contact.html", "http://biostat.jabsom.hawaii.edu/Home/jobs.html", "http://biostat.jabsom.hawaii.edu/Home/donate.html", "http://biostat.jabsom.hawaii.edu/Research/research.html", "http://biostat.jabsom.hawaii.edu/Research/researchexpertise.html", "http://biostat.jabsom.hawaii.edu/Research/healthcaredatabases.html", "http://biostat.jabsom.hawaii.edu/Research/brfss.html", "http://biostat.jabsom.hawaii.edu/Research/cms.html", "http://biostat.jabsom.hawaii.edu/Research/hhic.html", "http://biostat.jabsom.hawaii.edu/Research/nhanes.html", "http://biostat.jabsom.hawaii.edu/Research/nhis.html", "http://biostat.jabsom.hawaii.edu/Research/collabresearch.html", "http://biostat.jabsom.hawaii.edu/Education/education.html", "http://biostat.jabsom.hawaii.edu/Education/coursesoffered.html", "http://biostat.jabsom.hawaii.edu/Education/training.html", "http://biostat.jabsom.hawaii.edu/Education/resources.html", "http://biostat.jabsom.hawaii.edu/Services/support.html", "http://biostat.jabsom.hawaii.edu/Services/igrants.html", "http://biostat.jabsom.hawaii.edu/Services/services.html", "http://biostat.jabsom.hawaii.edu/Services/rates.html", "http://biostat.jabsom.hawaii.edu/Services/requestform.html"];
   