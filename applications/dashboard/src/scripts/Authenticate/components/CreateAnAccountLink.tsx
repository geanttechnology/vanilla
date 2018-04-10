import { t } from '@core/application';
import React from 'react';
import { Link } from 'react-router-dom';

interface IProps {
    link?: string;
}

export default class CreateAnAccountLink extends React.Component<IProps> {
    public static defaultProps = {
        link: '/entry/signup',
    };

    public render() {
        return <p className="authenticateUser-paragraph isCentered">{t('Not registered?')} <a href={this.props.link}>{t('Create an Account')}</a></p>;
    }
}