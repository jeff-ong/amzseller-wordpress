var search_engine_map = {
    'Google.com': ['//www.google.com/search?', 'q'],
    'Baidu.com': ['//www.baidu.com/s', 'wd'],
    'Amazon.com': '//www.amazon.com/s/ref=nb_sb_noss_1?',
    'Amazon.ca': '//www.amazon.ca/s/ref=nb_sb_noss_1?',
    'Amazon.co.jp': '//www.amazon.co.jp/s/ref=nb_sb_noss_1?',
    'Amazon.co.uk': '//www.amazon.co.uk/s/ref=nb_sb_noss_1?',
    'Amazon.de': '//www.amazon.de/s/ref=nb_sb_noss_1?',
    'Amazon.com.mx': '//www.amazon.com.mx/s/ref=nb_sb_noss_1?',
}

function select_engine(search_engine) {
    var selected_engine = search_engine.target

    $(search_engine.target).addClass('selected').siblings().removeClass('selected');

    switch ($(selected_engine).text()) {
        case 'Google.com':
            $('#searchForm').attr('action', search_engine_map['Google.com'][0])
            $('#search_query').attr('name', search_engine_map['Google.com'][1])
            break;
        case 'Baidu.com':
            $('#searchForm').attr('action', search_engine_map['Baidu.com'][0])
            $('#search_query').attr('name', search_engine_map['Baidu.com'][1])
            break;
        case 'Amazon.com':
            $('#searchForm').attr('action', search_engine_map['Amazon.com'])
            $('#search_query').attr('name', 'field-keywords')
            break;
        case 'Amazon.ca':
            $('#searchForm').attr('action', search_engine_map['Amazon.ca'])
            $('#search_query').attr('name', 'field-keywords')
            break;
        case 'Amazon.co.jp':
            $('#searchForm').attr('action', search_engine_map['Amazon.co.jp'])
            $('#search_query').attr('name', 'field-keywords')
            break;
        case 'Amazon.co.uk':
            $('#searchForm').attr('action', search_engine_map['Amazon.co.uk'])
            $('#search_query').attr('name', 'field-keywords')
            break;
        case 'Amazon.de':
            $('#searchForm').attr('action', search_engine_map['Amazon.de'])
            $('#search_query').attr('name', 'field-keywords')
            break;
        case 'Amazon.com.mx':
            $('#searchForm').attr('action', search_engine_map['Amazon.com.mx'])
            $('#search_query').attr('name', 'field-keywords')
            break;
        default:
            $('#searchForm').attr('action', search_engine_map['Google.com'])

    }
}

function validate() {
    var s_q_validate = $('#search_query').val()
    if (s_q_validate == "") {
        alert("Enter a search query");
        return false;
    }
}