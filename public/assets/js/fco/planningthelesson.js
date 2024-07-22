$(document).ready(function () {
    var checkedValues = {};
    var highestQuestionNumber = 0;

    $(".table-row").each(function () {
        var questionNumber = parseInt($(this).data("question"));
        if (questionNumber > highestQuestionNumber) {
            highestQuestionNumber = questionNumber;
        }
    });
    $("#totalQuestions").html(highestQuestionNumber);
    var totalQuestions = highestQuestionNumber;

    $(".form-check-input").change(function () {
        var value = $(this).val();
        var questionNumber = $(this).closest(".table-row").data("question");

        // Check if any checkbox is checked for the current question
        var isChecked =
            $(this).closest(".table-row").find('input[type="checkbox"]:checked')
                .length > 0;

        // If no checkbox is checked, remove the questionNumber from checkedValues
        if (!isChecked) {
            delete checkedValues[questionNumber];
        } else {
            // Update checkedValues with the value of the checked checkbox
            checkedValues[questionNumber] = [value];
        }

        updateTotalValues(checkedValues);
        generateComments(checkedValues);
    });

    function updateTotalValues(checkedValues) {
        var totals = {
            "c-1": 0,
            "c-2": 0,
            "c-3": 0,
            "c-4": 0,
            "c-5": 0,
        };

        for (var question in checkedValues) {
            var values = checkedValues[question];
            values.forEach(function (value) {
                var columnNumber = parseInt(value);
                totals["c-" + columnNumber] += columnNumber;
            });
        }
        for (var column in totals) {
            $(".table-total__tally ." + column).text(totals[column]);
        }
        var totalSum = Object.values(totals).reduce(
            (acc, curr) => acc + curr,
            0
        );
        let aveVal = (totalSum / totalQuestions).toFixed(2);
        var rating = "";
        if (aveVal <= 1.81) {
            rating = "Poor";
        } else if (aveVal <= 2.61) {
            rating = "Fair";
        } else if (aveVal <= 3.41) {
            rating = "Good";
        } else if (aveVal <= 4.21) {
            rating = "Very Good";
        } else {
            rating = "Excellent";
        }
        $(".average").text(aveVal);
        $(".rating").text(rating);
    }

    function generateComments(checkedValues) {
        var commentTextarea = $("#FCO_Comment");
        commentTextarea.val(""); 

        for (var question in checkedValues) {
            var rating = checkedValues[question][0]; 
            var remarkRating = "";
            var questionSummarize = "";
            var comment = "";
            var fullComment = ""
            if (rating === "1" || rating === "2") {
                if (rating === "1") {
                    remarkRating = "This received a poor rating.";
                } else if (rating === "2") {
                    remarkRating = "This received a fair rating.";
                }
                switch (question) {
                    case "1":
                        questionSummarize =
                            "Prepares a competency-based instructional plan ensuring alignment between lesson objectives, activities, and assessment.";
                        comment = "Improvement needed in plan alignment.";
                        break;
                    case "2":
                        questionSummarize =
                            "Applies appropriate motivational strategies.";
                        comment =
                            "Strategies may need enhancement for effectiveness.";
                        break;
                    case "3":
                        questionSummarize =
                            "Prepares, selects, and utilizes suitable teaching and learning materials.";
                        comment =
                            "Material selection or preparation may require improvement.";
                        break;
                    case "4":
                        questionSummarize =
                            "Chooses and implements efficient and effective teaching strategies.";
                        comment =
                            "Teaching strategies could be more impactful.";
                        break;
                    case "5":
                        questionSummarize =
                            "Designs activities that accommodate diverse learner needs, disabilities, giftedness, and talents.";
                        comment =
                            "Activities may need adjustment to better meet diverse learner needs.";
                        break;
                    case "6":
                        questionSummarize =
                            "Connects past and present lessons across curriculum areas.";
                        comment =
                            "Connection between past and present lessons may need improvement.";
                        break;
                }
                // Concatenate the comment
                fullComment =
                    questionSummarize +
                    " (" +
                    remarkRating +
                    ": " +
                    comment +
                    ")";

                // Append the comment to the textarea
                commentTextarea.val(commentTextarea.val()+ "\n" + fullComment);
            } 
        }
    }
});
