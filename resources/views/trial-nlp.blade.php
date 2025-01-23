<!DOCTYPE html>
@include('partials.head')

<body>
    <h1>NLP for POS Hunter</h1>



</body>

<script>
    const sentence = "He conducted a thorough analysis of the financial market trends.";
    console.log("Sentence: ", sentence);
    console.log('');
    
    console.log(nlp(sentence).out('tags'));
</script>



</html>
