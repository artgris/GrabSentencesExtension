# GrabSentencesExtension
Twig extension to grab sentences from text

## Usage

text = *Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas cursus scelerisque bibendum. Duis sodales finibus quam, vel accumsan odio lacinia eget. Vestibulum convallis porttitor fringilla.*


    {{ text|grab_sentences }} #Lorem ipsum dolor sit amet, consectetur adipiscing elit.

    {{ text|grab_sentences(3) }} #Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas cursus scelerisque bibendum. Duis sodales finibus quam, vel accumsan odio lacinia eget.
