export default class CroReadMoreTextView {
    constructor(options) {
        this.options = options;

        this.$container = $('.jCRTcontainer');

        this.#addControlButtons();

        this.text = this.$container.find('> :first-child');
        this.$moreButton = $('.jmoreBtn');
        this.$lessButton = $('.jlessBtn');

        this.text.height(this.options.heightLimit);
        this.text.show();

        this.scrollHeight = this.text[0].scrollHeight;
    }

    isHeightLimitReached = () => {
        return this.scrollHeight > this.options.heightLimit;
    };

    showControlButtons = () => {
        this.$moreButton.show();
    };

    onReadMoreClick = (callback) => {
        this.$moreButton.off('click').on('click', () => {
            callback();
            return false;
        });
    };

    showMoreText = () => {
        this.$moreButton.hide();
        this.$lessButton.show();
        this.text.animate({'height': this.scrollHeight});
    };

    onReadLessClick = (callback) => {
        this.$lessButton.off('click').on('click', () => {
            callback();
            return false;
        });
    };

    hideMoreText = () => {
        this.$lessButton.hide();
        this.$moreButton.show();
        this.text.animate({'height': this.options.heightLimit + 'px'});
    };

    #addControlButtons = () => {
        this.$container.append(this.options.controlButtons);
    };
}
