#!/bin/bash

# Use txt2tags to build the html doc files. Use header.html and footer.html
# in htmldoc to make them all pretty

cat htmldoc/header.html > ../docs/html/readme.html
cat htmldoc/readmeheader.html >> ../docs/html/readme.html
txt2tags --target=xhtml --no-headers --outfile=- ../docs/README.txt >> ../docs/html/readme.html
cat htmldoc/footer.html >> ../docs/html/readme.html

cat htmldoc/header.html > ../docs/html/faq.html
cat htmldoc/faqheader.html >> ../docs/html/faq.html
# Change * to - for proper bullet points
perl  -p -e 's/^\* /- /g' ../docs/FAQ.txt > TestFAQ.txt
# Make sure headers work
perl  -p -e 's/^===/\n===/g' TestFAQ.txt > FAQ.txt
txt2tags --target=xhtml --no-headers --outfile=- FAQ.txt >> ../docs/html/faq.html
cat htmldoc/footer.html >> ../docs/html/faq.html

cat htmldoc/header.html > ../docs/html/install.html
cat htmldoc/installheader.html >> ../docs/html/install.html
txt2tags --target=xhtml --no-headers --outfile=- ../docs/INSTALL.txt >> ../docs/html/install.html
cat htmldoc/footer.html >> ../docs/html/install.html

